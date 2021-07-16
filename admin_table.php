<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link rel = "stylesheet" href = "/css/bootstrap-utilities.min.css">
  <title>Основная таблица</title>
<link rel="stylesheet" href="/css/input.css">
<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
  <h1 id='user'> Вы зашли как администратор </h1><hr>
<?php
if($_COOKIE['user'] ==''){    //проверка на зайцев
  header('Location: /');
}
include_once("table_data.php");
?>

<form class="form-signin" action="text_add.php" method="post">
<input type="text" id='problem' class="form-control" name='problem' placeholder="введите текст с проблемой" required autofocus >
<input type="text" id='decision' class="form-control" name='decision' placeholder="введите текст с решением" required autofocus >
<button class="btn btn-lg btn-primary btn-block" type="submit">добавить</button>
</form><hr>
</body>
  <footer>
  <p> Если желаете покинуть нас, то рядом <a href="/exit.php">выход</a> </p>

  </footer>

</html>
