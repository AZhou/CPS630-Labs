<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Database
  </title>
  <style media="screen">
    h1 {
      position: fixed;
      align-content: center;
    }
  </style>
</head>
<body>

  <?php

  $title=$descript=$year=$muse="";
  $titleErr=$descriptErr=$yearErr=$museErr="";
  $subj=$_POST["subject"];
  $genre=$_POST["genre"];
  $type=$_POST["rdb"];
  $ccs=$_POST["CCS"];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST['title'])) {
		  $titleErr = "Title Required";
	  } else {
		  $title = test_input($_POST["title"]);
		  echo 'Title: '.$_POST["title"];
	  }
    
    $descript = test_input($_POST["description"]);
    $year = test_input($_POST["year"]);
    $muse = test_input($_POST["museum"]);

  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $artworks = array(
	"Title" => $title,
	"Description" => $descript,
	"Year" => $year,
	"Museum" => $muse,
	"Subject" => $subj,
	"Genre" => $genre,
	"Type" => $type,
	"Creative Commons Specification" => $ccs);

  // print_r($artworks);
  
  ?>

  <!-- <p>Description: <?php echo $_POST["description"]; ?></p>
  <p>Year: <?php echo $_POST["year"]; ?></p>
  <p>Subject: <?php echo $_POST["subject"]; ?></p>
  <p>Genre: <?php echo $_POST["genre"]; ?></p>
  <p>Type: <?php echo $_POST["rdb"]; ?></p>
  <p>Museum: <?php echo $_POST["museum"]; ?></p>
  <p>Creative Commons Specification: <?php echo implode(', ', $_POST["CCS"]); ?></p>
  <h1>Database Updated!</h1> -->

</body>
</html>


