<?php
$mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_STRING);
$pas = filter_var(trim($_POST['pas']), FILTER_SANITIZE_STRING);
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
$result = $mysqli->query("SELECT * FROM `user` WHERE `mail`= '$mail' AND `password` = '$pas'");
//print_r($result);
$user = $result->fetch_assoc();
//print_r($user);
//print_r ($user[status]);
if(count($user) == 0){
		echo "Не знаем таких";
 		exit();
} if ($user[status] =='admin') {
	header('Location: ./admin/admin_table.php');
} if ($user[status] == 'user') {
	header('Location: ./user/user_table.php');
}




setcookie('user', $user['mail'], time() + 3600, "/"); //куки 3600 секунд


$mysqli->close();


?>