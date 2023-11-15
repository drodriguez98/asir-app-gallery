<?php

  include dirname( dirname( dirname( __FILE__))) . "/common/utils.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/config.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/database.php";

  $imageId = $_POST['imageId'];
  $authorId = $_POST['authorId'];
  $name = $_POST['name'];
  $text = $_POST['text'];

  $connection = connect($config['database']);

  if (isset($_POST['enabled'])) { $enabled = 1; } else { $enabled = 0; }

  if ($_FILES['file']['name'] != "") {

    move_uploaded_file($_FILES["file"]["tmp_name"], "../../images/" . $_FILES["file"]["name"]);

    $file = $_FILES["file"]["name"];
    $size = $_FILES["file"]["size"];

    $sqlAuthors = "update images set authorId = ".$authorId.", name = '".$name."', text = '".$text."', file = '".$file."', size = '".$size."', enabled = ".$enabled." where authorId = " . $authorId;

  } else { $sqlAuthors = "update images set authorId = ".$authorId.", name = '".$name."', text = '".$text."', enabled = ".$enabled." where authorId = " . $authorId; }

  $return = execute($sqlAuthors, $connection);

  close($connection);

  header ("location: ../home.php?page=images");

?>
