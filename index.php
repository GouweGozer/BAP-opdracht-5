<?php

$to = '24753@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'FROM: ' . $_POST['from'];

mail($to, $subject, $message, $headers);

echo 'Uw mail is verstuurd. Bedankt!';

?>
