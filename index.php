<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>


  <body>

    <div class="container mt-4">
<?php
  if($_COOKIE['user'] ==''):
?>
      <form class="form-signin" action="check.php" method="post">
        <h2 class="form-signin-heading">Авторизация</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name='mail' placeholder="Электронная почта" required autofocus >
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name='pas' placeholder="пароль" required >
        <div class="checkbox">
          <!--<label>
          //  <input type="checkbox" value="remember-me"> Запомнить //галочка напомнить, когда нибудь сделается
          </label> -->
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Вход</button>
      </form>
      <?php else: ?>
<p>Добро пожаловать <? echo $_COOKIE['user'] ?>. Пройдем <a href="/user_table.php">далее</a>. </p>
<p>Если желаете покинуть нас, то рядом <a href="/exit.php">выход</a>. </p>
<?php endif;?>
    </div> <!-- /container -->

  </body>
</html>
