<?php
$probl = filter_var(trim($_POST['problem']), FILTER_SANITIZE_STRING);
$dec = filter_var(trim($_POST['decision']), FILTER_SANITIZE_STRING);
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
$result = $mysqli->query("INSERT INTO `test table` (`problem`, `decision`, `appraisal`, `id`) VALUES ('$probl', '$dec', NULL, NULL);");


header('Location: admin_table.php');
exit();
?>
//print_r($result);
//$user = $result->fetch_assoc();
//print_r($user);
//print_r ($user[status]);
//if(count($user) == 0){
//		echo "Не знаем таких";
// 		exit();