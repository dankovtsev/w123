<?php require('header.php');?>
<body>
 <h1 style='text-align: center';> Вы зашли в роли пользователя </h1>
<?php
if($_COOKIE['user'] ==''){    //проверка на зайцев
  header('Location: /');
}
include_once("table_data.php");
?>

<form action="appraisal_table.php" method="post" name="drop_down_box">
  <input type="text" id="appr" style="max-width: 330; width: 280;" name='num' placeholder="номер строки" required autofocus >
    <select name="menu" size="1">
    <option value="first">*</option>
    <option selected="selected" value="second">**</option>
    <option value="third"> *** </option>
   </select>
  <button type="button" class="btn btn-lg btn-primary" style="padding-top: 1px; padding-bottom: 2px;"disabled>Добавить</button>
</form><hr>
</body>
<?php require('footer.php');?>
