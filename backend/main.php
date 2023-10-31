<?php 

// include "../index.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function formatPhoneNumber($phoneNumber) {
  $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);

  if(strlen($phoneNumber) == 10) {
      $areaCode = substr($phoneNumber, 0, 3);
      $nextThree = substr($phoneNumber, 3, 3);
      $lastFour = substr($phoneNumber, 6, 4);

      $phoneNumber = '+7 ('.$areaCode.') '.$nextThree.'-'.$lastFour;
  }

  return $phoneNumber;
}

if (isset($_POST) && isset($_POST['submit_form'])) {
  var_dump($_POST);
  $name = $_POST['name'];
  $phone_link = '+7'.$_POST['phone'];
  $phone = formatPhoneNumber($_POST['phone']);
  $email = $_POST['email'];
  // $email = (string)$email;
  $letter = $_POST['message'];

  $message = "
  <h1>Связаться</h1>
  <p>Имя: $name</p>
  <p>Электронная почта: $email</p>
  Телефон: <a href='tel:$phone_link'>$phone</a>
  <p>Сообщение: $letter</p>";

  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'den768653@gmail.com';
  $mail->Password = 'iusn jyws cajw zmry ';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom('den768653@gmail.com');
  $mail->addAddress('sietebonduy@yandex.ru');
  $mail->isHTML(true);

  $mail->Subject = 'Contact';
  $mail->Body = $message;

  $mail->send();

}

header("Location: ../index.php#contact-form");
exit();

?>