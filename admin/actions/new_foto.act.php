<?php

  include dirname(dirname( dirname( __FILE__))) . "/common/utils.php";
  include dirname(dirname( dirname( __FILE__))) . "/common/config.php";
  include dirname(dirname( dirname( __FILE__))) . "/common/database.php";

  $authorId = $_POST['authorId'];
  $name = $_POST['name'];
  $text = $_POST['text'];

  if (isset($_POST['enabled'])) { $enabled = 1; } else { $enabled = 0; }

  move_uploaded_file($_FILES["file"]["tmp_name"], "../../images/" . $_FILES["file"]["name"]);

  $file = $_FILES["file"]["name"];
  $size = $_FILES["file"]["size"];

  $connection = connect($config['database']);

  $sqlAuthors = "insert into images(authorId, name, file, size, text, enabled) values( ".$authorId.", '".$name."', '".$file."', '".$size."', '".$text."', ".$enabled.")";

  $return = execute($sqlAuthors, $connection);

  close($connection);

  header ("location: ../home.php?page=listado");

?>