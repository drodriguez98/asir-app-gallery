<?php

  include dirname( dirname( dirname( __FILE__))) . "/common/utils.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/config.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/database.php";

  $connection = connect($config['database']);
  $sqlAuthors = "select a.*, b.name as author from images as a inner join authors as b on a.authorId = b.authorId order by a.imageId desc";
  $rowsAuthors = executeQuery($sqlAuthors, $connection);

  close( $connection);

?>