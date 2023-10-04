<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//	$to = 'dfox@foxartbox.com';
	$to = 'info@tatyanavoilokova.com';

	$subject    = '[tatyanavoilokova.com] Product order';
	$userName   = $_POST['user-name'];
	$userEmail  = $_POST['user-email'];
	$productUrl = $_POST['product-link'];

	$message = '<html lang="en"><body>';
	$message .= '<p><strong>Имя: </strong>' . $userName . '</p>';
	$message .= '<p><strong>Email: </strong>' . $userEmail . '</p>';
	$message .= '<p><strong>Ссылка на продукт: </strong>' . $productUrl . '</p>';
	$message .= '</body></html>';

	$headers = 'From: info@tatyanavoilokova.com' . "\r\n" .
		'Reply-To: sender@example.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion() . "\r\n" .
		'Content-Type: text/html; charset=UTF-8';

	if (mail($to, $subject, $message, $headers)) {
		echo 'Email sent successfully.';
	}
	else {
		echo 'Email could not be sent.';
	}
} ?>
