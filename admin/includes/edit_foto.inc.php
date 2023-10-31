<!--  Página para editar las imagenes procesado por /actions/edit_foto.act.php  -->

<?php

  #   Includes.

  include dirname(dirname(dirname( __FILE__))) . "/common/utils.php";
  include dirname(dirname(dirname( __FILE__))) . "/common/config.php";
  include dirname(dirname(dirname( __FILE__))) . "/common/mysql.php";

  #   Conectamos con la base de datos, guardamos los autores para el select en $rows y la imagen en $rows_f.

  $connection = Connect($config['database']);

  $sql = "select * from autores order by nombre asc";

  $rows = ExecuteQuery( $sql, $connection);

  $sql_foto = "select * from imagenes where id = " . $_GET['id'];

  $rows_f = ExecuteQuery($sql_foto, $connection);

  $rows_fotos = $rows_f[0];


  if ($rows_fotos['texto'] == 0) {

    $enabled = 0;

  } else {

    $enabled = 1;

  }

?>

<!--    Formulario  -->

<div class="container">

    <div class="row">

      <div class="col-lg-12 text-lett">

        <h2 class="mt-5">Editar foto</h2>

      </div>
  
    </div>

    <div class="row form_new">

      <div class="col-lg-2 text-left"></div>

      <div class="col-lg-10 text-left">
       
        <form role="form" action="actions/edit_foto.act.php" method="post" enctype="multipart/form-data">

          <input type="hidden" name="id" id="id" value="<?php echo $rows_fotos['id']; ?>">

          <div class="form-group row">

            <label for="id_autor" class="col-lg-2 col-form-label">Autor</label>
             
              <div class="col-lg-4 text-lett">

                <!--   Mostramos las posiciones 0 y 1 (nombre e id) del listado de autores que sacamos de la base de datos en un select  -->

                <select  class="form-control" name="id_autor" id="id_autor">

                    <?php

                      foreach ($rows as $row) {

                        if ($row[0] == $rows_fotos['id_autor']) {

                          echo "<option value= ".$row[0]." selected>".$row[1]."</option>";

                        } else {

                          echo "<option value= ".$row[0].">".$row[1]."</option>";
                          
                        }
                        
                      }

                    ?>

                </select>

            </div>
           
          </div>

          <div class="form-group row">

            <label for="nombre" class="col-lg-2 col-form-label">Nombre</label>
             
              <div class="col-lg-4 text-lett">

                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="<?php echo $rows_fotos['nombre']; ?>">

            </div>
           
          </div>

          <div class="form-group row">

            <label for="fichero" class="col-lg-2 col-form-label">Fichero</label>
             
              <div class="col-lg-4 text-lett">

                <input type="file" class="form-control" id="fichero" name="fichero" placeholder="">

                <?php echo $rows_fotos['archivo']; ?>

            </div>
           
          </div>

          <div class="form-group row">

            <label for="tamaño" class="col-lg-2 col-form-label">Texto</label>
             
              <div class="col-lg-4 text-lett">

                <textarea rows="5" cols="60" id="texto" name="texto"><?php echo $rows_fotos['texto']; ?></textarea>

            </div>
           
          </div>

          <div class="form-group row">

            <label for="enabled" class="col-lg-2 col-form-label">Activado</label>
             
              <div class="col-lg-3 text-lett">

                <input type="checkbox"  id="enabled" name="enabled" <?php echo $enabled; ?>>

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
