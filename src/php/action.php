<?php
// Connect variables
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "form_db";
$table_name = "form_table";


// Form's data
if (isset($_POST)) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$string = $_POST["string"];
	$number_1 = $_POST["number_1"];
	$number_2 = $_POST["number_2"];
	$sum = $number_1 + $number_2;
} else {
	die ("Не найдены данные POST");
};


//Query variables
$create_db_sql = "CREATE DATABASE ${db_name}";
$create_table_sql = "CREATE TABLE ${db_name}.${table_name}(
	name VARCHAR (30) NOT NULL,
	email VARCHAR (30) NOT NULL PRIMARY KEY,
	string VARCHAR (30) NOT NULL,
	number_1 INT,
	number_2 INT,
	sum INT
)";
$insert_data_sql = "INSERT INTO `${table_name}` (`name`, `email`, `string`, `number_1`, `number_2`, `sum`) VALUES (
	'$name',
	'$email',
	'$string',
	'$number_1',
	'$number_2',
	'$sum'
);";
$delete_writes_sql = "DELETE FROM `${table_name}`";
$select_data_sql = "SELECT * FROM `${table_name}`";


// Connection with server
$conn = mysqli_connect($servername, $username, $password);

// Create database
mysqli_query($conn, $create_db_sql);

// Select database
mysqli_select_db($conn, $db_name);

// Create table
mysqli_query($conn, $create_table_sql);

// Rewrite data in table
mysqli_query($conn, $delete_writes_sql);
mysqli_query($conn, $insert_data_sql);


// Work with Excel file
require_once 'PHPExcel/Classes/PHPExcel.php';

$xls = new PHPExcel(); 
$page = $xls->setActiveSheetIndex(0);
$page->setTitle("Form"); 

$page->setCellValue("A1", "Name");
$page->setCellValue("A2", "E-mail");
$page->setCellValue("A3", "String");
$page->setCellValue("A4", "Number 1");
$page->setCellValue("A5", "Number 2");
$page->setCellValue("A6", "Sum");

$page->setCellValue("B1", $name);
$page->setCellValue("B2", $email);
$page->setCellValue("B3", $string);
$page->setCellValue("B4", $number_1);
$page->setCellValue("B5", $number_2);
$page->setCellValue("B6", $sum);

$objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
$objWriter->save("form_table.xlsx");


// Work with PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";
require_once "PHPMailer/src/Exception.php";

$mail = new PHPMailer(true);

try {
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		$mail->isSMTP();                                            // Send using SMTP
		$mail->Host       = "smtp.yandex.ru";                    // Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = "mzhatkin@yandex.ru";                     // SMTP username
		$mail->Password   = "serdykova12";                               // SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 25;

		// Recipients
		$mail->setFrom("mzhatkin@yandex.ru", "Bonki Todd");
		$mail->addAddress($email);

		// Add attachments
		$mail->addAttachment("form_table.xlsx");
		// $mail->addAttachment($_FILES["file"]);

		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = "Данные из формы";
		$mail->Body    = "My body!";
		$mail->AltBody = "";

		$mail->send();
		echo "Message has been sent";
} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>