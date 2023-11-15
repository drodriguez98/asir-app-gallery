<?php

  include dirname(dirname( __FILE__)) . "/common/config.php";
  include dirname(dirname( __FILE__)) . "/common/database.php";

  $page = $_GET['page'];

  $connection = connect( $config['database']);

  if ( $page == 'images') { 
    
    $sqlAuthors  = "delete from images where imageId = " . $_GET['imageId'];

  } else { $sqlAuthors  = "delete from authors where authorId = " . $_GET['authorId']; }

  $return = execute( $sqlAuthors, $connection);
  close( $connection);
  header("location: home.php?page=" . $page);

?>