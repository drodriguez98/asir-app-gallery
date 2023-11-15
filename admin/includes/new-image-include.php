<?php

  include dirname(dirname( dirname( __FILE__))) . "/common/utils.php";
  include dirname(dirname( dirname( __FILE__))) . "/common/config.php";
  include dirname(dirname( dirname( __FILE__))) . "/common/database.php";

  $connection = connect($config['database']);
  $sqlAuthors = "select * from authors order by name asc";
  $rowsAuthors = executeQuery( $sqlAuthors, $connection);

?>

<div class="container">

    <div class="row">

      <div class="col-lg-12 text-lett"> <h2 class="mt-5">New image</h2> </div>
  
    </div>

    <div class="row form_new">

      <div class="col-lg-2 text-left"></div>

      <div class="col-lg-10 text-left">

        <form role="form" action="actions/new-image-action.php" method="post" enctype="multipart/form-data">

          <div class="form-group row">

            <label for="authorId" class="col-lg-2 col-form-label">Author</label>
             
              <div class="col-lg-4 text-lett">
                
                <select  class="form-control" name="authorId" id="authorId"> <?php foreach ($rowsAuthors as $row) { echo "<option value= ".$row[0].">".$row[1]."</option>"; } ?> </select>

            </div>
           
          </div>

          <div class="form-group row">

            <label for="name" class="col-lg-2 col-form-label">Name</label>
             
              <div class="col-lg-4 text-lett"> <input type="text" class="form-control" id="name" name="name" placeholder=""> </div>
           
          </div>

          <div class="form-group row">

            <label for="file" class="col-lg-2 col-form-label">File</label>
             
              <div class="col-lg-4 text-lett"> <input type="file" class="form-control" id="file" name="file" placeholder=""> </div>
           
          </div>


          <div class="form-group row">

            <label for="text" class="col-lg-2 col-form-label">Text</label>
             
              <div class="col-lg-4 text-lett"> <textarea rows="5" cols="60" id="text" name="text"></textarea> </div>
           
          </div>

          <div class="form-group row">

            <label for="enabled" class="col-lg-2 col-form-label">Enabled</label>
             
              <div class="col-lg-3 text-lett"> <input type="checkbox"  id="enabled" name="enabled"> </div>
            
          </div>

          <button type="submit" class="btn btn-primary">Add</button>

        </form>


      </div>

      <div class="col-lg-2 text-left"></div>

    </div>

  </div>