<link href="input.css" rel="stylesheet">
<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
</form>
<div><hr>
<p> Просто ЦАРЬ батюшка проверка роли </P>
</div><hr>
<p> Если желаете покинуть нас, то рядом <a href="/exit.php">выход</a> </p>