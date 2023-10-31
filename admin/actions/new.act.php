<!--  http://galeria.local/admin/index.php?page=new -->

<?php

  #   Includes.

  include dirname(dirname(dirname( __FILE__))) . "/common/utils.php";
  include dirname(dirname(dirname( __FILE__))) . "/common/config.php";
  include dirname(dirname(dirname( __FILE__))) . "/common/mysql.php";

  # Recogemos los parametros que nos pasa el formulario /includes/new.inc.php por POST. Podemos comprobar que recibimos los datos con debug ($_POST). Comprobamos con un if si la opción enabled está marcada.

  $display_name = $_POST['display_name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']); 

  if (isset($_POST['enabled'])) {

    $enabled = 1;

  } else {

    $enabled = 0;

  }

  # Utilizamos las funciones que creamos en /common/mysql.php para conectarnos a la base de datos y realizar el insert.

  $connection = Connect($config['database']);

  $sql = "insert into autores(nombre, email, password, enabled) values( '".$display_name."', '".$email."', '".$password."', ".$enabled.")";

  $return = Execute($sql, $connection);

  #   Cerramos la conexión y reenviamos a home.

  Close ($connection);

  header ("location: /admin/home.php");

?>