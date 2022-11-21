<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 
error_reporting(0);
session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->








<?php
include '../conexion.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
.table {
	
  table-layout: fixed;
  width: max-content;
  

}

.boton{

  background-color: #0c6ff0;
}
/* 
table{
  table-layout:fixed;
  width: 250%;
} */
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

<form action="RETIRADOS.PHP"    method="post">

<input type="text" name="busqueda" > <br>  
<input  class="boton" type="submit" name="enviar" value="buscar">
</form>
<br>
<br>


<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
    soportes y informes
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="https://www.hp.com/co-es/home.html"  target="_blank"  >soporte de HP</a>
    <a class="dropdown-item" href="https://www1.la.dell.com/content/default.aspx?c=co&l=es&s=&s=gen&~ck=cr" target="_blank" >Soporte de DELL</a>
    <a class="dropdown-item" href="https://www.acer.com/ac/es/AR/content/home" target="_blank">Soporte de acer </a>
    <a class="dropdown-item" href="../RETIRADOS/informe_retirados/informe.php" target="_blank">informe </a>
  </div>
</div><BR></BR>




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



<!-- table-hover  table-bordered   table table-sm -->

<table border="2" class="table"  >

<tr style="background:#337ab7; color:WHITE;" >
    <th>code_activo</th>
    <th>The name</th>
    <Th>POSITION</Th>
    <th>Deparment</th>
    <th>Computer</th>
    <Th>Mark</Th>
    <th>Reference Model</th>
    <Th>Serials</Th>
    <Th >Processor</Th>
    <th>Email</th>
    <th>password</th>
    <th>PIN</th>
    <th>Name Computer</th>
  
  
    <th>Comment</th>
    <th>Change</th>
    <th>RAM</th>
    <th>HARD_DRIVE</th>
    <th>Serial charger</th>
    <th>Charger Part Number</th>
    <th>Supplier</th>
    <th>Date of purchase</th>
    <th>Computer cost </th>

   

</tr>





<?php

$consulta=$con->query("SELECT * FROM retirados  WHERE 
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
           '%$busqueda%'  ");



while($row=$consulta->fetch_array()){


?>

<!-- tiene un error hay que fijarse en la correspondencia de la columnas -->


<tr class="table-info">

<td style="color:#456789;font-size:80%;"><?php echo $row['code_activo'] ?></td>
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


 


<?php
}

?>


</table>


    
</body>

<a href="/INVENTARIOdos/home/inventariob.php" class="btn btn-success" >  <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48">turn_left</span>return</a> <br><br>

<!-- <button class="btn btn danger"><a href="inventariob.php"> regresar-----> </a></button> <br><br><br><br> 

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

   
  </body>
</html>



<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:/inventariodos/index.html");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

