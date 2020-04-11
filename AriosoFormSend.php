<?php

$kurse      = $_POST['kurse'];
$amount     = $_POST['amount'];
$duration   = $_POST['duration'];
$nameClient = $_POST['nameClient'];
$tel        = $_POST['tel'];
$Email      = $_POST['Email'];
$message    = $_POST['message'];
$oneLicense = $_POST['twoLicense'];
$oneLicense = $_POST['oneLicense'];

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





?>
