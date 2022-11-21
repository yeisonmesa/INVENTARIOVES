<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 
error_reporting(0);
session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->


<?php
include 'conexion.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  
    <!-- Bootstrap CSS -->
    
    
    <title>buscador</title>

    <style> 
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 50%;
  
}

h1{
    background-color: white;
    margin: auto;
    padding: 1px;
}
body{
    background-color:#333333;
}

form{
    display: flex;
  align-items: center;
  justify-content: center;
  
}

table{
  table-layout: fixed;
  width: max-content;
}

th, td {
    /* 
   
    */

    word-wrap: break-word;
    position:relative; 
   width:300;
    overflow:"auto";
	   
}


</style>


</head>
<body>


<form action="busqueda.php"    method="post">

<input type="text" name="busqueda" > <br>  
<input type="submit"  class="btn btn-info " name="enviar" value="sears">
</form>
<br>
<br>


<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
    soportes
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="https://www.hp.com/co-es/home.html"  target="_blank" >soporte de HP</a>
    <a class="dropdown-item" href="https://www1.la.dell.com/content/default.aspx?c=co&l=es&s=&s=gen&~ck=cr" target="_blank">Soporte de DELL</a>
    <a class="dropdown-item" href="https://www.acer.com/ac/es/AR/content/home" target="_blank">Soporte de acer </a>
    
  </div>
</div><BR></BR>

<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
    notas
  </button>
  <div class="dropdown-menu">
  <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalnotas" data-bs-whatever="@mdo">NEW </button></td>
  <a class="dropdown-item" href=" /INVENTARIOdos/NOTAS/notas.php" target="_blank">ver notas </a>
    
    
  </div>
<br>
<br>




<a href="/INVENTARIOdos/inventory.php" class="btn btn-success" >  <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48">turn_left</span>regresar</a> <br><br>


<br><br><br>

<?php 

if (isset($_POST['enviar'])) {

    
$busqueda=$_POST['busqueda'];

}
?>





<table border="1" >
<thead>
<tr style="background:#337ab7; color:WHITE;" >
    <th  scope="col">code_activo</th>
    <th  scope="col">The Name</th>
    <Th>POSITION</Th>
    <th>Deparment</th>
    <th>Computer</th>
    <Th>Mark</Th>
    <th>Reference model</th>
    <Th>Serials</Th>
    <Th >Processor</Th>
    <th>Email</th>
    <th>Password</th>
    <th>PIN</th>
    <th>Name Computer</th>
  
  
    <th>Comment</th>
    <th>Change</th>
    <th>RAM</th>
    <th>HARD_DRIVE</th>
    <th>Serial charger</th>
    <th>Charger part Number</th>
    <th>Supplier</th>
    <th>Date of purchase</th>
    <th>Computer cost</th>

    <Th>EDIT</Th>
    <Th>DELETE</Th>

</tr>
</thead>
<tbody>





<?php

$consulta=$con->query("SELECT * FROM inventory  WHERE 
code_activo LIKE '%$busqueda%'  or  NOMBRE LIKE '%$busqueda%'
 or  POSITION LIKE '%$busqueda%'  or  Deparment LIKE '%$busqueda%'
  or  COMPUTER LIKE '%$busqueda%' or  MARCA LIKE '%$busqueda%' or
   MODELO_REFERENCIA  LIKE '%$busqueda%' or  SERIALES LIKE '%$busqueda%'
     or  PROCESSOR LIKE '%$busqueda%'  or  Email LIKE '%$busqueda%' or 
      CONTRASEÑA LIKE '%$busqueda%'  or  PIN LIKE '%$busqueda%'  or 
       NOMBRE_EQUIPO LIKE '%$busqueda%'  or  comment LIKE '%$busqueda%' 
        or  RAM LIKE '%$busqueda%' or  HARD_DRIVE LIKE '%$busqueda%' or 
         SERIAL_CARGADOR LIKE '%$busqueda%'  or  NUMERO_PARTE_CARGADOR
          LIKE '%$busqueda%' or  PROVEEDOR LIKE '%$busqueda%'   or 
           FECHA_COMPRA LIKE '%$busqueda%'  or  COSTO_EQUIPO LIKE 
           '%$busqueda%' ");



while($row=$consulta->fetch_array()){


?>

<!-- tiene un error hay que fijarse en la correspondencia de la columnas -->


<tr class="table table-striped"  style="background:white; color:black;">

<td><?php echo $row['code_activo'] ?></td>
<td><?php echo $row['NOMBRE'] ?></td>
<td><?php echo $row['POSITION'] ?></td>
<td><?php echo $row['Deparment'] ?></td>
<td><?php echo $row['COMPUTER'] ?></td>
<td><?php echo $row['MARCA'] ?></td>
<td><?php echo $row['MODELO_REFERENCIA'] ?></td>
<td><?php echo $row['SERIALES'] ?></td>
<td><?php echo $row['PROCESSOR'] ?></td>
      
<td><?php echo $row['Email'] ?></td>
<td><?php echo $row['CONTRASEÑA'] ?></td>
<td><?php echo $row['PIN'] ?></td>
<td><?php echo $row['NOMBRE_EQUIPO'] ?></td>
<td><?php echo $row['comment'] ?></td>
<td><?php echo $row['CAMBIO'] ?></td>
<td><?php echo $row['RAM'] ?></td>
<td><?php echo $row['HARD_DRIVE'] ?></td>
<td><?php echo $row['SERIAL_CARGADOR'] ?></td>

<td><?php echo $row['NUMERO_PARTE_CARGADOR'] ?></td>


<td><?php echo $row['PROVEEDOR'] ?></td>
<td><?php echo $row['FECHA_COMPRA'] ?></td>
<td><?php echo $row['COSTO_EQUIPO'] ?></td>


 
<TD><a href="../INVENTARIOdos/EDIT_AND_UPDATE/update.php?id=<?php echo $row['code_activo'] ?>" class="btn btn-success" >   <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48">Inventory</span>Edit</a></TD>


<td><a href="/INVENTARIOdos/ELIMINAR/borra.php?code_activo=<?php echo $row['code_activo'] ?>" class="btn btn-danger">  <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48">Delete</span>    Delete</a></td>


</tr>




<?php
}

?>
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

        <form action="busqueda.php" method="POST"> 

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


<!-- ESTE ESPACIO ESTA DESTINADO A VENTANA MODAL DE COMETARIOS  -->


</tbody>
</table>


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




    
</body>

<a href="/INVENTARIOdos/home/inventariob.php" class="btn btn-success" >  <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48">turn_left</span>regresar</a> <br><br>

<!-- <button class="btn btn danger"><a href="inventariob.php"> regresar-----> </a></button> <br><br><br><br> 

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

   
  </body>
</html>



<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:/inventariodos/");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->





