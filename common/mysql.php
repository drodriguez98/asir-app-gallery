<!--  Funciones para conectarse a la base de datos y hacer consultas mysql   -->

<?php

  #   Función para la conexión. Recibe el array con los datos de config.php.

  function Connect($config = array()) {

    $conn = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);

    mysqli_set_charset( $conn, $config['encoding']);

    return ($conn);

  }


  #   Función que recibe la conexión y la consulta sql.

  function Execute($sql, $conn) {

    $return = mysqli_query($conn, $sql);

    return ($return);

  }

  #   Función para ejecutar la consulta. Devuelve los resultados en un array. Si no hay resultados, devuelve un array vacío.
  
  function ExecuteQuery($sql, $conn) {      

    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {

      do {   

        $data[] = $row;

      } while ($row = mysqli_fetch_array($result, MYSQLI_BOTH));

    } else {

      $data = null;

    }

    mysqli_free_result($result);
    return ($data);

  }

  #   Función para cerrar la conexión.

  function Close( $conn) {

    mysqli_close($conn);
    unset ($conn);

  }
  

?>