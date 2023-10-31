<!--  http://galeria.local/admin/home.php?page=listado  -->

<!--  Realiza la consulta y devuelve las imágenes con sus datos a la página de listado   -->

<?php

  #   Includes.

  include dirname( dirname( dirname( __FILE__))) . "/common/utils.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/config.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/mysql.php";

   #  Conectamos con la base de datos y buscamos todas las imagenes.

  $connection = Connect($config['database']);

  $sql = "select a.*, b.nombre as autor from imagenes as a inner join autores as b on a.id_autor = b.id order by a.id desc";

  $rows = ExecuteQuery($sql, $connection);

  Close( $connection);

?>