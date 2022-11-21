
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

session_start();
if (isset($_SESSION["usuario"])) {
   


?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->





<?php
    require_once 'Paginar_inventario.php';
 
    $conexion = new mysqli( 'localhost', 'root', '', 'ves_asset');
    $conexion->query("SET NAMES 'utf8'");
 
    $pagina       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $enlaces      = ( isset( $_GET['enlaces'] ) ) ? $_GET['enlaces'] : 5;
    $consulta      = "SELECT * FROM inventory";
    
    $paginar  = new Paginar($conexion, $consulta);
    $resultados    = $paginar->getDatos($pagina);
    
?>


    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">




    
        <title>abministracion de inventario</title>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<!-- LLAMARV A GOOGLE  FONTS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
        crossorigin="anonymous">

        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />


<style> 
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  transition: width 1s ease-in-out;
}

input[type=text]:focus {
  width: 50%;
}

h1{
    /* background-color: white; */
    margin: auto;
    padding: 1px;
    color: white;
}
body{
    background-color: #333;
}
form{
    display: flex;
  align-items: center;
  justify-content: center;
  
}

/* el siguiente codigo ayuda a poner botones de forma horizontal */

button{
        display:block;
float:left;
padding:0 10px;
margin: 0;
    }

/* el siguiente codigo ayuda a poner botones de forma horizontal */


/* EL SIGUIENTE CODIGO CSS AYUDA A AJUSTAR EL TAMAÑO DE LAS CELDAS SEGUN EL TAMAÑO DE LAS LETRAS  */

table{
  table-layout: fixed;  
  width: max-content;
}

 th,td {
    /* 
   
    */

    word-wrap: break-word;
    position:relative; 
   width:300;
    overflow:"auto";
	   
}



</style>


    </head>

    <!-- funcion para borrar -->
    <script type="text/javascript">
    function confirmDelete()
    {
        var respuesta = confirm("estas seguro que deseas ELIMINAR al usuario");
    
    if (respuesta == true)
     {
        
return true;

    }
    else{
        return false;
    }


    }


</script>

     <!-- funcion para borrar -->

     
    <body>

    
    <!-- vincularse al modal de notas  -->
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
    notas
  </button>
  <div class="dropdown-menu">
  <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#modalnotas" data-bs-whatever="@mdo" > NEW </button> </td>
  <a class="dropdown-item" href=" /INVENTARIOdos/NOTAS/notas.php" target="_blank">ver notas </a>
    
    
  </div>

  <!-- vincularse al modal de notas  -->

  <!-- ESTE ESPACIO ESTA DESTINADO A VENTANA MODAL DE COMETARIOS  -->
<div class="modal fade" id="modalnotas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="inventory.PHP" method="POST"> 

          <div class="mb-3">

            <label for="recipient-name" class="col-form-label">code_activo:</label>
            <input type="number" class="form-control" id="recipient-name"  name="code_activo">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" >comment:</label>
            <!-- <input type="text" class="form-control" id="recipient-name"  name="comentario" > -->
            <textarea class="form-control" id="message-text" name="comment" type="text" ></textarea>

          </div>
          <input type="submit"   class="btn btn-primary" name="envia"  value="Send message"  >
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary" name="envia">Send message</button> -->
       
      </div>
    </div>
  </div>
</div>

<?php

include ("conexion.php");


  if (isset($_POST['envia'])) {
      $code_activo = $_POST['code_activo'];
      $comment = $_POST['comment'];


        $consulta = "INSERT INTO comentarios (code_activo , comment) VALUES ('$code_activo', '$comment')";
        $ejecutar= $con ->query($consulta);

              if($ejecutar){

                  // echo "<embed loop='false' src='sound.mp3' hidden='true' autoplay='true'> ";
                  echo "<script language='JavaScript'>
              alert('el cometario ha sido guardado');
              location.assign('busqueda.php');
              </script>";
                  

                }
                else {
                  echo "<script language='JavaScript'>
                  alert('a ocurrido un error no esperado');
                  location.assign('busqueda.php');
                  </script>";




                }

            }


?>

<!-- ESTE ESPACIO ESTA DESTINADO A VENTANA MODAL DE COMETARIOS  -->
 <!-- ------------------------------------------------------informes -->
 <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle"   type="button" data-toggle="dropdown" aria-expanded="false"  >
    INFORMES
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="/INVENTARIODOS/export/expor.php" class="btn btn-success" >  <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48">assignment_add</span>INFORME EN EXCEL</a>




    <a class="dropdown-item" href="/INVENTARIODOS/pdf/pdf.php" class="btn btn-danger" >  <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48">picture_as_pdf </span> GENERAR INFORME DETALLADO PDF</a>


    <a class="dropdown-item" href="/INVENTARIODOS/pdf/pdfdos.php" class="btn btn-danger" >  <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48">picture_as_pdf</span>Generar informe simple pdf</a>
  </div>
</div>



    <!-- ---------------------------- fin de informes -------------------------------------------------- -->

<!-- --------------redireccionar a otras paginas--------------------- -->

<div class="dropdown"  >
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
    mas opciones
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="/INVENTARIOdos/LOGIN/pagina_segura.php">pagina principal</a>
    <a class="dropdown-item" href="/INVENTARIOdos/home/inventariob.php">formulario de el inventario</a>
    <a class="dropdown-item" href="/INVENTARIOdos/RETIRADOS/RETIRADOS.PHP" target="_blank" >Retirados</a>
   
  </div>
</div><br>







<!-- ---fin de redirecionamiento ----------------------------- -->



    <!-- ---------------------------BUSCADOR-------------------------- -->
    <form action="/inventariodos/busqueda.php"    method="POST" class="form">

<input type="text" name="busqueda" > <br>  
<input type="submit" name="enviar" class="btn btn-info" value="sears">
</form>

<!-- --------------------REDIRECIONA AL BUSCADOR---------------------------------------- -->


<!-- --------------------------MUESTRA LA TABLA PAGINADA PERMITE BORRAR Y ACTUALIZAR--------- -->

        <div class="">
                <div class="col-md-12 ">
                    <h1 style="text-align:center">inventory</h1>
                    <ul class="pager">
                        <?php echo $paginar->crearLinks( $enlaces); ?>
                    </ul>
                    <table class="table table-striped"   border="3">
                            <thead>
                                <tr style="background:#337ab7; color:WHITE;" >
                                <th style="width: 70px;">edit</th>
                                <th style="width: 70px;">delete</th>
                                    <th  scope="col">CODE_ACTIVO</th>
                                    <th  scope="col">the name</th>
                                    <th  scope="col">POSITION</th>
                                    <th  scope="col">DEPARMENT</th>
                                    <th  scope="col">COMPUTER</th>
                                    <th  scope="col">mark</th>
                                    <th  scope="col">Reference Model</th>
                                    <th scope="col">Serials</th>
                                    <!-- EL TAMAÑO DE LA CASILLA SE MODIFICA CON EL WIDTH -->
                                    <th   >Processor</th>
                                    <th   scope="col">Email</th>
                                    <th  scope="col">password</th>
                                    <th  scope="col">PIN</th>
                                    <th  scope="col">Name Computer</th>
                                    <th  scope="col">COMMENT</th>
                                    <th  scope="col">change</th>
                                    <th  scope="col">RAM</th>
                                    <th  scope="col">HARD_DRIVE</th>
                                    <th  scope="col">serial charger</th>
                                    <th  scope="col">charger part number </th>
                                    <th  scope="col">supplier</th>
                                    <th  scope="col">DATE of purchase</th>
                                    <th  scope="col">Computer cost</th>

                                    <th class="edit" style="width: 70px;">EDIT</th>
                                    <th class="edit " style="width: 130px;">delete</th>







                                </tr>
                            </thead>
                            <tbody>

<!-- -------------  USAR UN FOR CON EL FIN DE CREAR UN ARRAY QUE MUESTRE TODA LA INFORMACION---------                            -->
                                <?php for( $i = 0; $i < count($resultados->datos); $i++ ): ?>
                               <tr  class="table table-striped"> 

                               <TD class="edit"><a href="../INVENTARIOdos/EDIT_AND_UPDATE/update.php?id=<?php echo $resultados->datos[$i]['code_activo'] ?>" class="btn btn-info" >   <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48">Inventory</span></a></TD>





<td class="edit"><a href="/INVENTARIOdos/ELIMINAR/borra.php?code_activo=<?php echo $resultados->datos[$i]['code_activo'] ?>" class="btn btn-warning"  onclick="return confirmDelete()" >  <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48">Delete</span> </a></td> 
  


                                            <td scope="row" ><?php echo $resultados->datos[$i]['code_activo']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['NOMBRE']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['POSITION']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['Deparment']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['COMPUTER']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['MARCA']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['MODELO_REFERENCIA']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['SERIALES']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['PROCESSOR']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['Email']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['CONTRASEÑA']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['PIN']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['NOMBRE_EQUIPO']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['comment']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['CAMBIO']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['RAM']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['HARD_DRIVE']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['SERIAL_CARGADOR']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['NUMERO_PARTE_CARGADOR']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['PROVEEDOR']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['FECHA_COMPRA']; ?></td>
                                            <td scope="row"><?php echo $resultados->datos[$i]['COSTO_EQUIPO']; ?></td>

<Td class="edit"><a href="../INVENTARIOdos/EDIT_AND_UPDATE/update.php?id=<?php echo $resultados->datos[$i]['code_activo'] ?>" class="btn btn-info" >   <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48">Inventory</span></a></TD>

<!-- colspan="50px" rowspan="50px" -->



<td class="edit"><a href="/INVENTARIOdos/ELIMINAR/borra.php?code_activo=<?php echo $resultados->datos[$i]['code_activo'] ?>" class="btn btn-warning"  onclick="return confirmDelete()" >  <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48">Delete</span> eliminar</a></td> 
  
  


                        


                                        

                                            
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                            
                    </table>

                    
<!-- ---------------------AQUI FINALIZA LA TABLA  ------------- -->



<!-- ------------ESTA LLAMANDO LOS ENLACES CREADOS EN PAGINAR_INVENTARIO.PHP --------- -->
                    <ul class="pagination">
                        <?php echo $paginar->crearLinks( $enlaces); ?>
                    </ul>
              
                </div>
        </div>
        </body>
</html>


<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:../index.html");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<!-- disparador para papelera
CREATE TRIGGER `PAPELERA` BEFORE UPDATE ON `inventory`
 FOR EACH ROW INSERT INTO retirados
(code_activo,NOMBRE,POSITION,Deparment,COMPUTER,MARCA,MODELO_REFERENCIA
,SERIALES,PROCESSOR,Email,CONTRASEÑA,PIN,NOMBRE_EQUIPO,comment,
CAMBIO,RAM,HARD_DRIVE,SERIAL_CARGADOR,NUMERO_PARTE_CARGADOR,PROVEEDOR
,FECHA_COMPRA,COSTO_EQUIPO) 
VALUES(OLD.code_activo,OLD.NOMBRE,OLD.POSITION,OLD.Deparment,OLD.COMPUTER,OLD.MARCA,OLD.MODELO_REFERENCIA
,OLD.SERIALES,OLD.PROCESSOR,OLD.Email,OLD.CONTRASEÑA,OLD.PIN,OLD.NOMBRE_EQUIPO,OLD.comment,
OLD.CAMBIO,OLD.RAM,OLD.HARD_DRIVE,OLD.SERIAL_CARGADOR,OLD.NUMERO_PARTE_CARGADOR,OLD.PROVEEDOR
,OLD.FECHA_COMPRA,OLD.COSTO_EQUIPO) -->