<!--  Formulario para subir imágenes procesado por /actions/new_foto.act.php  -->

<?php

  #   Includes.

  include dirname(dirname( dirname( __FILE__))) . "/common/utils.php";
  include dirname(dirname( dirname( __FILE__))) . "/common/config.php";
  include dirname(dirname( dirname( __FILE__))) . "/common/mysql.php";

  #   Conexión con la base de datos para obtener un listado de los autores.

  $connection = Connect($config['database']);

  $sql = "select * from autores order by nombre asc";

  $rows = ExecuteQuery( $sql, $connection);


?>

<!--  Formulario   -->

<div class="container">

    <div class="row">

      <div class="col-lg-12 text-lett">

        <h2 class="mt-5">Añadir imagen</h2>

      </div>
  
    </div>

    <div class="row form_new">

      <div class="col-lg-2 text-left"></div>

      <div class="col-lg-10 text-left">

        <form role="form" action="actions/new_foto.act.php" method="post" enctype="multipart/form-data">

          <div class="form-group row">

            <label for="id_autor" class="col-lg-2 col-form-label">Autor</label>
             
              <div class="col-lg-4 text-lett">

                <!--   Mostramos las posiciones 0 y 1 (nombre e id) del listado de autores que sacamos de la base de datos en un select  -->
                
                <select  class="form-control" name="id_autor" id="id_autor">

                    <?php

                      foreach ($rows as $row) {

                        echo "<option value= ".$row[0].">".$row[1]."</option>";

                      }

                    ?>

                </select>

            </div>
           
          </div>

          <div class="form-group row">

            <label for="nombre" class="col-lg-2 col-form-label">Nombre</label>
             
              <div class="col-lg-4 text-lett">

                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="">

            </div>
           
          </div>

          <div class="form-group row">

            <label for="fichero" class="col-lg-2 col-form-label">Fichero</label>
             
              <div class="col-lg-4 text-lett">

                <input type="file" class="form-control" id="fichero" name="fichero" placeholder="">

            </div>
           
          </div>


          <div class="form-group row">

            <label for="texto" class="col-lg-2 col-form-label">Texto</label>
             
              <div class="col-lg-4 text-lett">

                <textarea rows="5" cols="60" id="texto" name="texto"></textarea>

            </div>
           
          </div>

          <div class="form-group row">

            <label for="enabled" class="col-lg-2 col-form-label">Activado</label>
             
              <div class="col-lg-3 text-lett">

                <input type="checkbox"  id="enabled" name="enabled">

            </div>
            
          </div>

          <br><br>

          <button type="submit" class="btn btn-primary">Enviar</button>

        </form>

        <br><br>

      </div>

      <div class="col-lg-2 text-left"></div>

    </div>

  </div>