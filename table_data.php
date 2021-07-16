<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link rel = "stylesheet" href ="/css/bootstrap-utilities.min.css">
  <link rel="stylesheet" href="/css/input.css">
  <title>Основная таблица</title>
</head>
 <body>

<?php

$servername = "w123";
$username = "ADMIN";
$password = "123";
$database = "the task 1";



// Create connection
$conn = new mysqli("$servername", "$username", "$password", "$database");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$sql = "SELECT * FROM `test table`";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p style='margin-top: 50px; text-align: center'>Получено объектов: $rowsCount</p>";

    echo "<table class= 'table table-sm'>
        <tr class='table-light'>
            <th>№</th>
            <th>Проблема</th>
            <th>Решение</th>
            <th>Оценка</th>
        </tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["problem"] . "</td>";
            echo "<td>" . $row["decision"] . "</td>";
            echo "<td>" . $row["appraisal"] . "</td>";
        echo "</tr>";

    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>


</table>
 </body>
</html>