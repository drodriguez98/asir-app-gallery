<?php

  include dirname(dirname( dirname( __FILE__))) . "/common/config.php";
  include dirname(dirname( dirname( __FILE__))) . "/common/database.php";

  $connection = connect($config['database']);
  $sqlAuthors = "select * from authors order by name asc";
  $rowsAuthors = executeQuery( $sqlAuthors, $connection);

?>

<div class="container">

    <div class="row"> <div class="col-lg-12 text-lett"> <h2 class="mt-5">New image</h2> </div> </div>

     <div class="col-lg-6">

        <form role="form" action="actions/new-image-action.php" method="post" enctype="multipart/form-data">

			<label for="authorId" class="col-lg-2 col-form-label">Author</label>
			<select  class="form-control" name="authorId" id="authorId"> <?php foreach ($rowsAuthors as $row) { echo "<option value= ".$row[0].">".$row[1]."</option>"; } ?> </select>

			<label for="name" class="sr-only"></label>
			<input type="text" id="name" name="name" class="form-control" placeholder="Name" required autofocus>

			<label for="file" class="col-lg-2 col-form-label">File</label>
			<input type="file" class="form-control" id="file" name="file" placeholder=""> 

            <label for="text" class="col-lg-2 col-form-label">Text</label>
			<textarea rows="5" cols="60" id="text" name="text"></textarea> 

			<label for="enabled">Enabled</label>
			<input type="checkbox"  id="enabled" name="enabled">

			<button type="submit" class="btn btn-primary">Add</button>

        </form>

      </div>

  </div>