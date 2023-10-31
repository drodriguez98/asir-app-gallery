<!--	Utilidades 		-->

<?php

	#	Función  que recibe un parámetro y dice dónde está.

  function debug( $var) { 

    $debug = debug_backtrace();

    echo "<pre>";

		echo $debug[0]['file']." ".$debug[0]['line']."<br><br>";

		print_r($var); 

    echo "</pre>";

    echo "<br>";

  }

?>