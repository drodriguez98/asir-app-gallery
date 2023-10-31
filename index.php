<!--   Índex principal. Redirecciona a páginas de login y registro y muestra las imágenes activadas por los usuarios admin.   -->

<?php

  #   Conexión con la base de datos y consulta para obtener las imágenes con la opción enabled marcada.

  include "common/utils.php";
  include "common/config.php";
  include "common/mysql.php";

  $connection = Connect($config['database']);

  $sql = "select * from imagenes where enabled = 1 order by id desc";

  $rows = ExecuteQuery($sql, $connection);

  Close( $connection);

?>

<!DOCTYPE html>

<html lang="en">

  <head>

      <title>Galería de imágenes</title>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/bootstrap/css/thumbnail-gallery.css" rel="stylesheet">

  </head>

  <body>

      <!-- Nav -->

      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

          <div class="container">

              <div class="navbar-header">

                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>

                  </button>

                  <a class="navbar-brand" href="#">GALERÍA</a>

              </div>

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                  <ul class="nav navbar-nav">

                    <!-- Enlace a página de login -->
                      
                      <li>

                          <a href="admin/index.php?page=login">Acceder</a>

                      </li>

                  </ul>

              </div>

          </div>

      </nav>

      <!-- Page Content -->

      <div class="container">

        <div class="row">

          <div class="col-lg-12">

              <h1 class="page-header">Galería</h1>

          </div>

          <?php

            foreach ($rows as $row) 

            {
              echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">

                    <a class="thumbnail" href="#">

                        <img class="img-responsive css_img" src="images/'.$row['archivo'].'" alt="">
                        
                    </a>'.$row['nombre'].'

                </div>';
            }

          ?>

        </div>

          <hr>

        <!-- Footer -->

        <footer>

            <div class="row">

                <div class="col-lg-12">

                    <p></p>

                </div>

            </div>

        </footer>

      </div>

      <!-- jQuery -->

      <script src="assets/bootstrap/js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->

      <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
