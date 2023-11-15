<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gallery</title>

        <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/bootstrap/css/thumbnail-gallery.css" rel="stylesheet">
		    <link href="../assets/css/styles.css" rel="stylesheet">		

    </head>
	
    <body>

      <?php
	  
	  	  include "includes/menu.php";
        
        $page = $_GET['page'];

        switch ($page) {

          case 'images':

            include "actions/images-action.php";
            include "includes/images-include.php";
            break;

          case 'authors':

            include "includes/authors-include.php";
            break;

          case 'new':

            include "includes/new-image-include.php";
            break;

          case 'edit':

            include "includes/edit-image-include.php";
            break;
          
          default:

            break;
        }

        ?>

      <script src="/assets/bootstrap/js/jquery.js"></script>
      <script src="/assets/bootstrap/js/bootstrap.min.js"></script>

    </body>

</html>