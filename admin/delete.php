<!--  Página que borra la imagen o autor con el id de la fila seleccionada -->

<!--  Procesa los deletes de los dos listados   -->

<?php

  include dirname(dirname( __FILE__)) . "/common/utils.php";
  include dirname(dirname( __FILE__)) . "/common/config.php";
  include dirname(dirname( __FILE__)) . "/common/mysql.php";

  #   Conectamos con la base de datos para hacer el delete en cualquiera de las dos tablas.

  $page = $_GET['page'];

  $connection = Connect( $config['database']);

  if ( $page == 'listado') {

    $sql  = "delete from imagenes where id = " . $_GET['id'];

  } else {

    $sql  = "delete from autores where id = " . $_GET['id'];

  }

  $return = Execute( $sql, $connection);

  Close( $connection);

  header("location: home.php?page=" . $page);

?>
