const fs                = require('fs')
const concat            = require('gulp-concat')
const config            = JSON.parse(fs.readFileSync('../config.json'))
const cssMinify         = require('gulp-csso')
const ftp               = require('vinyl-ftp')
const gulp              = require('gulp')
const gutil             = require('gulp-util')
const rename            = require('gulp-rename')
const sass              = require('gulp-sass')(require('sass'))
const uglify            = require('gulp-uglify')

// FTP config
const host              = config.host
const password          = config.password
const port              = config.port
const user              = config.user

const remoteTheme           = '/tatyanavoilokova.com/public_html/wp-content/themes/tv2023/'
const remoteCss             = remoteTheme + 'css/'
const remoteJs              = remoteTheme + 'js/'
const remoteTemplateParts   = remoteTheme + 'template-parts/'

const localTheme            = 'wp-content/themes/tv2023/'
const localCss              = localTheme + 'css/'
const localJs               = localTheme + 'js/'
const localTemplateParts    = localTheme + 'template-parts/'



function getFtpConnection() {
	return ftp.create({
		host:           host,
		log:            gutil.log,
		password:       password,
		parallel:       3,
		port:           port,
		user:           user
	})
}

let conn = getFtpConnection()



gulp.task('css', function () {
	return gulp.src(localCss + 'style.scss')
		.pipe(sass())
		.pipe(cssMinify())
		.pipe(conn.dest(remoteTheme))
})

gulp.task('css_copy', function () {
	return gulp.src(localCss + '**/*')
		.pipe(conn.dest(remoteCss))
})

gulp.task('html_copy', function () {
	return gulp.src(localTheme + '*.php')
		.pipe(conn.dest(remoteTheme))
})

gulp.task('template_parts_copy', function () {
	return gulp.src(localTemplateParts + '**/*')
		.pipe(conn.dest(remoteTemplateParts))
})

gulp.task('js_copy', function () {
	return gulp.src(localJs + '**/*.js')
		.pipe(conn.dest(remoteJs))
})

gulp.task('js', function () {
	return gulp.src([
			localJs + 'jquery-3.7.1.min.js',
			localJs + 'owl.carousel.min.js',
			localJs + '**/*.js'
		])
		.pipe(concat('all.js'))
		// .pipe(uglify())
		.pipe(rename({
			suffix: ".min"
		}))
		.pipe(conn.dest(remoteTheme))
})

gulp.task('watch', function() {
	gulp.watch(localCss + '**/*',               gulp.series('css', 'css_copy'))
	gulp.watch(localTheme + '*.php',            gulp.series('html_copy'))
	gulp.watch(localJs + '**/*.js',             gulp.series('js', 'js_copy'))
	gulp.watch(localTemplateParts + '**/*',     gulp.series('template_parts_copy'))
})

gulp.task('default', gulp.series('watch'))