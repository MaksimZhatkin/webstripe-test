<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "form_db";
$table_name = "form_table";

$conn = mysqli_connect($servername, $username, $password, $db_name);

$select_data_sql = "SELECT * FROM `${table_name}`";
$res = mysqli_query($conn, $select_data_sql);
$arr = mysqli_fetch_array($res);

$name = $arr["name"];
$email = $arr["email"];
$string = $arr["string"];
$number_1 = $arr["number_1"];
$number_2 = $arr["number_2"];
$sum = $arr["sum"];

function name_word_length($name){
	switch (strlen($name)) {
		case 0:
			$result = "ноль";
			break;
		case 1:
			$result = "один";
			break;
		case 2:
			$result = "два";
			break;
		case 3:
			$result = "три";
			break;
		case 4:
			$result = "четыре";
			break;
		case 5:
			$result = "пять";
			break;
		case 6:
			$result = "шесть";
			break;
		case 7:
			$result = "семь";
			break;
		case 8:
			$result = "восемь";
			break;
		case 9:
			$result = "девять";
			break;
		case 10:
			$result = "десять";
			break;
		case 11:
			$result = "одиннадцать";
			break;
		default:
			$result = "У вас весьма длинное имя!";
			break;
	};
	return $result;
};
$name_word = name_word_length($name);

print_r(
	"<b>Имя:</b> {$name}<br>
	<b>email:</b> {$email}<br>
	<b>Строка:</b> {$string}<br>
	<b>Число 1:</b> {$number_1}<br>
	<b>Число 2:</b> {$number_2}<br>
	<b>Число 1 + Число 2:</b> {$sum}<br>
	<b>длинна имени:</b> {$name_word}<br>
	<b>длинна первого эл. массива:</b> " . strlen($array[0]) . "<br>"
);
print_r($array)
?>