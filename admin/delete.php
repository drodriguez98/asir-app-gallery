<!--  Página que borra la imagen o autor con el id de la fila seleccionada -->

<?php

  include dirname(dirname( __FILE__)) . "/common/utils.php";
  include dirname(dirname( __FILE__)) . "/common/config.php";
  include dirname(dirname( __FILE__)) . "/common/database.php";

  $page = $_GET['page'];

  $connection = connect( $config['database']);

  if ( $page == 'listado') { $sqlAuthors  = "delete from images where imageId = " . $_GET['imageId'];

  } else { $sqlAuthors  = "delete from authors where authorId = " . $_GET['authorId']; }

  $return = execute( $sqlAuthors, $connection);
  close( $connection);
  header("location: home.php?page=" . $page);

?>