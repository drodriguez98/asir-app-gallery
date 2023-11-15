<!--    http://galeria.local/admin/index.php?page=login     -->

<?php

  include dirname( dirname( dirname( __FILE__))) . "/common/utils.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/config.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/database.php";


  $email = $_POST['email'];
  $login = md5($_POST['password']);

  $connection = connect($config['database']);

  $sqlAuthors = "select * from authors where email = '".$email."' and password = '".$login."'";

  $rowsAuthors = executeQuery($sqlAuthors, $connection);

  close($connection);

  // if (empty($rowsAuthors)) { header ("location: ../error.php?error=1"); } 
  
  //else {

    session_start();

    $_SESSION['id'] = $rowsAuthors[0]['id'];
    $_SESSION['email'] = $rowsAuthors[0]['email'];
    $_SESSION['session_id'] = session_id();

    header ("location: ../home.php?page=images");

  //}

?>