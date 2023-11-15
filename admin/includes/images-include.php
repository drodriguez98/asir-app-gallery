<script type="text/javascript">
  
  function deleteImage(imageId) { location.href = "delete.php?page=images&imageId=" + imageId; }

</script>

<div class="container">

    <div class="row"> <div class="col-lg-12 text-lett"> <h2 class="mt-5">Images</h2> </div> </div>

    <div class="row"> <div class="col-lg-12 text-lett"> <a class="btn btn-lg btn-warning" href="home.php?page=new">Add image</a> </div></div>

	<table class="table">

	  <thead>

		<tr>

		  <th scope="col">#</th>
		  <th scope="col">Author</th>
		  <th scope="col">File</th>
		  <th scope="col">Date added</th>
		  <th scope="col">Active</th>
		  <th scope="col">Edit</th>
		  <th scope="col">Delete</th>

		</tr>

		</tr>

	  </thead>

	  <tbody>

		<?php

		if (!empty($rowsAuthors)) {

		  foreach ($rowsAuthors as $row) {

			  if ($row['enabled'] == "1") { $enabled = "<img src='../assets/img/activo.png' height=20px width=20px>"; } else { $enabled = "<img src='../assets/img/no_activo.png' height=20px width=20px>"; }

			  echo '
				  <td>'.$row['imageId'].'</td>
				  <td>'.$row['authorId'].'</td>
				  <td><img src="../images/'.$row['file'].'" width=35px height= 35px></td>
				  <td>'.date("d/m/Y H:i:s", strtotime($row['created'])).'</td>
				  <td>'.$enabled.'</td>
				  <td><a href="home.php?page=edit&imageId='.$row['imageId'].'"><img src="../assets/img/edit.png" height=20px width=20px></a></td>
				  <td><a href="#" OnClick="deleteImage('.$row['imageId'].')"><img src="../assets/img/delete_2.png"  width=20px height= 20px></a></td>
				  </tr>
			  ';

		  }

		} else { echo "<tr><td colspan=7> No hay registros</td></tr>"; }

		?>

	  </tbody>

	</table>

</div>