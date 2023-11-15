<?php

  include dirname(dirname(dirname( __FILE__))) . "/common/utils.php";
  include dirname(dirname(dirname( __FILE__))) . "/common/config.php";
  include dirname(dirname(dirname( __FILE__))) . "/common/database.php";

  $connection = connect($config['database']);

  $sqlAuthors = "select * from authors order by name asc";
  $rowsAuthors = executeQuery( $sqlAuthors, $connection);

  $sqlImages = "select * from images where imageId = " . $_GET['imageId'];
  $rowsImages = executeQuery($sqlImages, $connection);

  $image = $rowsImages[0];

  if ($image['text'] == 0) { $enabled = 0; } else { $enabled = 1; }

?>

<!--    Formulario  -->

<div class="container">

    <div class="row">

      <div class="col-lg-12 text-lett">

        <h2 class="mt-5">Edit image</h2>

      </div>
  
    </div>

    <div class="row form_new">

      <div class="col-lg-2 text-left"></div>

      <div class="col-lg-10 text-left">
       
        <form role="form" action="actions/edit-image-action.php" method="post" enctype="multipart/form-data">

          <input type="hidden" name="imageId" id="imageId" value="<?php echo $image['imageId']; ?>">

          <div class="form-group row">

            <label for="authorId" class="col-lg-2 col-form-label">Author</label>
             
              <div class="col-lg-4 text-lett">

                <!--   Mostramos las posiciones 0 y 1 (nombre e id) del listado de autores que sacamos de la base de datos en un select  -->

                <select  class="form-control" name="authorId" id="authorId">

                    <?php

                      foreach ($rowsAuthors as $row) {

                        if ($row[0] == $image['authorId']) {

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

            <label for="name" class="col-lg-2 col-form-label">Name</label>
             
              <div class="col-lg-4 text-lett">

                <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo $image['name']; ?>">

            </div>
           
          </div>

          <div class="form-group row">

            <label for="file" class="col-lg-2 col-form-label">File</label>
             
              <div class="col-lg-4 text-lett">

                <input type="file" class="form-control" id="file" name="file" placeholder="">

                <?php echo $image['file']; ?>

            </div>
           
          </div>

          <div class="form-group row">

            <label for="text" class="col-lg-2 col-form-label">Text</label>
             
              <div class="col-lg-4 text-lett">

                <textarea rows="5" cols="60" id="text" name="text"><?php echo $image['text']; ?></textarea>

            </div>
           
          </div>

          <div class="form-group row">

            <label for="enabled" class="col-lg-2 col-form-label">Active</label>
             
              <div class="col-lg-3 text-lett">

                <input type="checkbox"  id="enabled" name="enabled" <?php echo $enabled; ?>>

            </div>
            
          </div>

          <br><br>

          <button type="submit" class="btn btn-primary">Edit</button>

        </form>

        <br><br>

      </div>

      <div class="col-lg-2 text-left"></div>
      
    </div>

  </div>
