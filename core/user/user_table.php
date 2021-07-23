<?php require('../../templates/header.php');?>
<?php require("../verification_cookie.php");?>
<body>
 <h1 style='text-align: center';> Вы зашли в роли пользователя </h1>
<?php include_once("../table_data.php");?>

<form action="/core/appraisal_table.php" method="post" name="drop_down_box">
  <input type="text" id="appr" style="max-width: 330; width: 280;" name='num' placeholder="номер строки" required autofocus >
    <select name="menu" size="1">
    <option value="first">*</option>
    <option selected="selected" value="second">**</option>
    <option value="third"> *** </option>
   </select>
  <button class="btn btn-lg btn-primary btn-block"  type="submit">добавить</button>
</form>

</body

<?php require('../../templates/footer.php');?>
