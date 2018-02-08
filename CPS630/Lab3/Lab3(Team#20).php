<!DOCTYPE html>
<html>
<body>

<?php

$title="";
$descript="";
$year="";
$muse="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = test_input($_POST["title"]);
  $descript = test_input($_POST["descript"]);
  $year = test_input($_POST["year"]);
  $muse = test_input($_POST["museum"]);
  
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

<form method="post" action="">
  Title: <input type="text" name="title">
  <br><br>
  Description: <textarea name="descript" rows="5" cols="40"></textarea>
  <br><br>
  Year: <input type="text" name="year">
  <br><br>
  Museum: <input type="text" name="museum">
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>
?>
</body>
</html>

