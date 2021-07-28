<?php require('../../templates/header.php');?>
<?php require("../verification_cookie.php");?>
<body>
 <h1 style='text-align: center';> Вы зашли в роли пользователя </h1>
 <link rel="stylesheet" href="/CSS/reyting_star.css">
<?php include_once("../table_data.php");?>








<form action="/core/appraisal_table.php" method="post" name="drop_down_box">
  <div>
    <h3 style="margin-left: 114px;">Оценить работу</h3><br>
  </div>
  <input type="text" id="appr" style="max-width: 330; width: 280; margin-left: 10px;" name='num' placeholder="номер строки" required autofocus >
   <!-- <select name="menu" size="1">
    <option value="✰">✰</option>
    <option selected="selected" value="✰✰">✰✰</option>
    <option value="✰✰✰"> ✰✰✰ </option>
   </select>-->
      <div class="rating-area" style ="margin-left: 208px;
      position: relative;
      z-index: 2;
      bottom: 34px;
      width: 200px;">
  <input type="radio" id="star-3" name="rating" value="★★★">
  <label for="star-3" title="Оценка «3»"></label>
  <input type="radio" id="star-2" name="rating" value="★★">
  <label for="star-2" title="Оценка «2»"></label>
  <input type="radio" id="star-1" name="rating" value="★">
       <label for="star-1" title="Оценка «1»"></label>
     </div>
  <button class="btn btn-lg btn-primary btn-block"  type="submit">добавить</button>
</form>

</body>

<?php require('../../templates/footer.php');?>
