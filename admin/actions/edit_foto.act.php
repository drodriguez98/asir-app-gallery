<?php

  #   Includes.

  include dirname( dirname( dirname( __FILE__))) . "/common/utils.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/config.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/mysql.php";

  # Recogemos los parametros que nos pasa el formulario /includes/edit_foto.inc.php por POST. Podemos comprobar que recibimos los datos con debug ($_POST). 

  $id = $_POST['id'];
  $id_autor = $_POST['id_autor'];
  $nombre = $_POST['nombre'];
  $texto = $_POST['texto'];

  $connection = Connect($config['database']);

  #   Comprobamos si la opción enabled está marcada.

  if (isset($_POST['enabled'])) {

    $enabled = 1;

  } else {

    $enabled = 0;

  }

  #   Comprobamos si se ha adjuntado algún fichero. Si es así, actualizamos los datos.

  if ($_FILES['fichero']['name'] != "") {

    move_uploaded_file($_FILES["fichero"]["tmp_name"], "../../images/" . $_FILES["fichero"]["name"]);

    $fichero = $_FILES["fichero"]["name"];
    $size = $_FILES["fichero"]["size"];

    $sql = "update imagenes set id_autor = ".$id_autor.", nombre = '".$nombre."', texto = '".$texto."', archivo = '".$fichero."', 
      tamaño = '".$size."', enabled = ".$enabled." where id = " . $id;

  } else {

    $sql = "update imagenes set id_autor = ".$id_autor.", nombre = '".$name."', texto = '".$texto."', enabled = ".$enabled." where id = " . $id;

  }

  $return = Execute($sql, $connection);

  Close($connection);

  #   Redirigimos a listado de imágenes.

  header ("location: ../home.php?page=listado");

?>
