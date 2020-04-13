<?php

$kurse      = $_POST['kurse'];
$amount     = $_POST['amount'];
$duration   = $_POST['duration'];
$nameClient = $_POST['nameClient'];
$tel        = $_POST['tel'];
$Email      = $_POST['Email'];
$message    = $_POST['message'];
//$oneLicense = $_POST['twoLicense'];
//$oneLicense = $_POST['oneLicense'];

$kurse      = htmlspecialchars($kurse);
$amount     = htmlspecialchars($amount);
$duration   = htmlspecialchars($duration);
$nameClient = htmlspecialchars($nameClient);
$tel        = htmlspecialchars($tel);
$Email      = htmlspecialchars($Email);
$message    = htmlspecialchars($message);
$oneLicense = htmlspecialchars($oneLicense);
$oneLicense = htmlspecialchars($oneLicense);

$kurse      = trim($kurse);
$amount     = trim($amount);
$duration   = trim($duration);
$nameClient = trim($nameClient);
$tel        = trim($tel);
$Email      = trim($Email);
$message    = trim($message);
$oneLicense = trim($oneLicense);
$oneLicense = trim($oneLicense);

//function sendLetter($_POST){
    // несколько получателей
    $to  = 'alexsk8888@gmail.com' . ', ';  // обратите внимание на запятую
    $to .= 'nfaubury@gmail.com';

// тема письма
    $subject = 'Письмо из плагина';

// текст письма
    $message = 'Пользователь ' . $_POST['nameClient'] . ' отправил вам письмо:<br/><br />';
    $message .= 'Телефон ' . $_POST['tel'] . '<br/><br />';
    $message .= 'Курс ' . $_POST['kurse'] . '<br/><br />';
    $message .= 'Всего ' . $_POST['amount'] . '<br/><br />';
    $message .= 'Длительность ' . $_POST['duration'] . '<br/><br />';
    $message .= '<em><b>' . $_POST['message'] . '</b></em><br /><br />';
    $message .= 'Связяться с ним можно по email <a href="mailto:' . $_POST['Email'] . '">' . $_POST['Email'] . '</a>';

// Для отправки HTML-письма должен быть установлен заголовок Content-type
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Дополнительные заголовки
    $headers .= 'To: Any-Web' . "\r\n"; // Свое имя и email
    $headers .= 'From: '  . $_POST['nameClient'] . '<' . $_POST['Email'] . '>' . "\r\n";

// Отправляем
    mail($to, $subject, $message, $headers);

    echo "Отправлено!";
//}

//sendLetter();

?>
