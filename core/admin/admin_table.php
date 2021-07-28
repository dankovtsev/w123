<?php require('../../templates/header.php');?>
<?php require("../verification_cookie.php");?>
<body>
  <h1 id='user'> Вы зашли как администратор </h1><hr>

<?php include_once("../table_data.php");?>

<div class="container-fluid">
  <form class="form-signin" action="/core/text_add.php" method="post">
  <!-- //один из вариантов

<input type="text" id='problem' class="form-control" name='problem' placeholder="введите текст с проблемой" required autofocus >
<input type="text" id='decision' class="form-control" name='decision' placeholder="введите текст с решением" required autofocus >-->

  <textarea class="form-control" placeholder="введите текст с проблемой" id="problem" name='problem' style="height: 100px"></textarea><hr>
  <textarea class="form-control" placeholder="введите текст c решением" id="decision" name='decision' style="height: 100px"></textarea><hr>
  <button class="btn btn-lg btn-primary btn-block"  type="submit">добавить</button>
  </form>
</div>
</body>
<?php require('../../templates/footer.php');?>