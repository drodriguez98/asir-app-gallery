<!--    http://galeria.local/admin/index.php?page=login     -->

<?php

  #   Includes.

  include dirname( dirname( dirname( __FILE__))) . "/common/utils.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/config.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/mysql.php";

  #   Recogemos los parametros que nos pasa el formulario /includes/login.inc.php por POST. Podemos comprobar que recibimos los datos con debug ($_POST).

  $email_login = $_POST['email_login'];
  $login_password = md5 ($_POST['login_password']);

  #   Utilizamos las funciones que creamos en /common/mysql.php para conectarnos a la base de datos y comprobar si existe un email con la contraseña introducida.

  $connection = Connect($config['database']);

  $sql = "select * from autores where email = '".$email_login."' and password = '".$login_password."'";

  $rows = ExecuteQuery($sql, $connection);

  Close($connection);

  #   Si no hay coincidencias redirigimos a una página de error. Si no, iniciamos la sesión y redirigimos a la página de listados.

  if (empty($rows)) {

    header ("location: ../error.php?error=1");

  } else {

    session_start();

    $_SESSION['id'] = $rows[0]['id'];
    $_SESSION['email'] = $rows[0]['email'];
    $_SESSION['session_id'] = session_id();

    header ("location: ../home.php?page=listado");

  }

?>