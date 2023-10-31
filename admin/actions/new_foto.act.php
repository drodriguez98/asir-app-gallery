<?php

  include dirname(dirname( dirname( __FILE__))) . "/common/utils.php";
  include dirname(dirname( dirname( __FILE__))) . "/common/config.php";
  include dirname(dirname( dirname( __FILE__))) . "/common/mysql.php";
 
  #debug ($_POST);
  #debug ($_FILES);

  # Recogemos los parametros que nos pasa el formulario /includes/new_foto.inc.php por POST. Podemos comprobar que recibimos los datos con debug ($_POST). 

  $id_autor = $_POST['id_autor'];
  $nombre = $_POST['nombre'];
  $texto = $_POST['texto'];

  # Comprobamos si la opción enabled está marcada.
                    
  if (isset($_POST['enabled'])) {

    $enabled = 1;

  } else {

    $enabled = 0;

  }

  #  Recogemos el nombre y tamaño del fichero y lo movemos a su destino con $_FILES.

  move_uploaded_file($_FILES["fichero"]["tmp_name"], "../../images/" . $_FILES["fichero"]["name"]);

  $fichero = $_FILES["fichero"]["name"];
  $tamaño = $_FILES["fichero"]["size"];
  

  # Conectamos con la base de datos, hacemos el insert y redirigimos a la página de listado de autores.

  $connection = Connect($config['database']);

  $sql = "insert into imagenes(id_autor, nombre, archivo, tamaño, texto, enabled) values( ".$id_autor.", '".$nombre."', '".$fichero."', '".$tamaño."', '".$texto."', ".$enabled.")";

  $return = Execute($sql, $connection);

  Close($connection);

  header ("location: ../home.php?page=listado");

?>