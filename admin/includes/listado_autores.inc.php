<!--  Listado de autores   -->

<?php

  include dirname( dirname( dirname( __FILE__))) . "/common/config.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/mysql.php";

   # Conectamos con la base de datos para obtener todos los autores.

  $connection = Connect($config['database']);

  $sql = "select * from autores order by nombre asc";

  $rows = ExecuteQuery($sql, $connection);

  Close( $connection);

?>

<!--  Script para borrar autores del listado. Al pulsar el icono de eliminar autor se elimina el autor con ese id  -->

<script type="text/javascript">
  
  function delete_post( id) {

    var ok = confirm("¿Seguro que quieres borrar este autor? ");
    
    if (!ok) {

      return false;

    } else {

      location.href = "delete.php?page=autores&id=" + id;

    }

  }

</script>


<!--  Tabla para el listado  -->

  <div class="container">

    <div class="row">

      <div class="col-lg-12 text-lett">

        <h2 class="mt-5">Listado de autores</h2>

      </div>
  
    </div>
    
    <div class="row cuadro_listado_fotos">

      <div class="col-lg-12">

        <table class="table">

          <thead>

            <tr>

              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Creado</th>
              <th scope="col">Activo</th>
              <th scope="col">Eliminar</th>

            </tr>

            </tr>

          </thead>

          <tbody>

            <?php

              #   Mostramos los datos que sacamos de la base de datos y mostramos un icono de actividad u otro en función del estado de cada autor. Añadimos un enlace a la función delete_post que redirecciona a la página de borrado (borrando el autor con el id de esa fila).

              foreach ($rows as $row) {

                if ( $row['enabled'] == "1") {

                  $enabled = "<img src='../assets/img/activo.png'  width=20px>";

                } else {

                  $enabled = "<img src='../assets/img/no_activo.png' width=20px>";

                }

                echo '

                  <td>'.$row['id'].'</td>
                  <td>'.$row['name'].'</td>
                  <td>'.$row['email'].'</td>
                  <td>'.date( "d/m/Y H:s:i", strtotime($row['created'])).'</td>
                  <td>'.$enabled.'</td>       
                             
                  <td><a href="#" OnClick="delete_post('.$row['id'].')"><img src="../assets/img/delete_2.png"  width=20px></a></td>
                  </tr>
                ';  

              }

            ?>

          </tbody>

        </table>

      </div>
      
    </div>

  </div>