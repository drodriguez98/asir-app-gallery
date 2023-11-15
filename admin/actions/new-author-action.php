<?php

  include dirname(dirname(dirname( __FILE__))) . "/common/utils.php";
  include dirname(dirname(dirname( __FILE__))) . "/common/config.php";
  include dirname(dirname(dirname( __FILE__))) . "/common/database.php";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']); 

  if (isset($_POST['enabled'])) { $enabled = 1; } else { $enabled = 0; }

  $connection = connect($config['database']);

  $sqlAuthors = "insert into authors(name, email, password, enabled) values( '".$name."', '".$email."', '".$password."', ".$enabled.")";

  $return = execute($sqlAuthors, $connection);

  close ($connection);

  header ("location: ../home.php?page=images");

?>