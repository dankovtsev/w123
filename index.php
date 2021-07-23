<?php require('templates/header.php');?>


  <body id="background">

    <div class="container mt-4">
    <?php
      if($_COOKIE['user'] ==''):
    ?>
                           <!-- Отправка формы на проверку /check.php -->

      <form class="form-signin" action= "core/check.php" method="post">
        <h2 class="form-signin-heading" style="margin-top: 200px";>Авторизация</h2>
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
          <p>Добро пожаловать <? echo $_COOKIE['user'] ?>. Перейдите <a href="/user_table.php">далее</a>. </p>
          <p>Что бы выйте нажмите <a href="/exit.php">выход</a>. </p>
  <?php endif;?>
    </div> <!-- /container -->

  </body>

<?php require('templates/footer.php');?>

