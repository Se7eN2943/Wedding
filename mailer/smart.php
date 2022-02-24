<?php 

use PHPMailer\PHPMailer\PHPMailer;


$name = $_POST['user_name'];
$surname = $_POST['user_surname'];
$presence = $_POST['presence'];
$car = $_POST['car'];
$eat = $_POST['eat'];
$drink1 = $_POST['drink1'];
$drink2 = $_POST['drink2'];
$drink3 = $_POST['drink3'];
$drink4 = $_POST['drink4'];
$drink5 = $_POST['drink5'];


require_once 'Exception.php';
require_once 'PHPMailer.php';
require_once 'SMTP.php';

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';  						// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'flip29431234';                 // Наш логин
$mail->Password = 'klvzrwvohwuibabw';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                       // TCP port to connect to
$mail->setFrom('flip29431234@yandex.ru', 'Ответ на приглашение');   // От кого письмо 
$mail->addAddress('flip2943@gmail.com');     			// Add a recipient//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Ответ на приглашение';
$mail->Body    = '
	Пользователь оставил свои данные <br> 
	Имя: ' . $name . ' <br>
	Фамилия: ' . $surname . ' <br>
	Присутствие: ' . $presence . ' <br>
	Машина: ' . $car . ' <br>
	Еда: ' . $eat . ' <br>
	Вода: ' . $drink1 . ' <br>
	Вода: ' . $drink2 . ' <br>
	Вода: ' . $drink3 . ' <br>
	Вода: ' . $drink4 . ' <br>
	Вода: ' . $drink5 . ' <br>
	';
$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
    echo "Error";  
} else {
    echo "Все норм";
}