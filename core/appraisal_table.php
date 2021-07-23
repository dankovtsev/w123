<?php
$num = filter_var(trim($_POST['num']), FILTER_SANITIZE_STRING);
$app = filter_var(trim($_POST['menu']), FILTER_SANITIZE_STRING);
//print_r($_POST);
$servername = "w123";
$username = "ADMIN";
$password = "123";
$database = "the task 1";



// Create connection
$mysqli = new mysqli("$servername", "$username", "$password", "$database");
	if ($mysqli->connect_error) {
	  die("Connection failed: " . $mysqli->connect_error);
	}

	//запрос к базе 
$result = $mysqli->query("UPDATE `test table` SET `appraisal` = '$app' WHERE `test table`.`id` = '$num'");


header('Location: /core/user/user_table.php');
exit();