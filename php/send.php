<?php
$to = 'client@reach-stacker-parts.ru';
$subject = 'Новый запрос с сайта';
$message = print_r($_POST, true);
$headers = 'From: webmaster@example.com';

mail($to, $subject, $message, $headers);
echo json_encode(['success' => true]);
?>