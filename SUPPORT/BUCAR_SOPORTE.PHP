<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 
error_reporting(0);
session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->








<?php
include 'conexion.php';
$con=conectar();

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
  width: 100%;
  background-color: white;
  margin: auto;
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


</style>


</head>
<body>

<form action="BUCAR_SOPORTE.PHP"    method="post">

<input type="text" name="busqueda" > <br>  
<input type="submit" name="enviar" value="buscar">
</form>
<br>
<br>


<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
    soportes
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="https://www.hp.com/co-es/home.html"  target="_blank">soporte de HP</a>
    <a class="dropdown-item" href="https://www1.la.dell.com/content/default.aspx?c=co&l=es&s=&s=gen&~ck=cr" target="_blank">Soporte de DELL</a>
    <a class="dropdown-item" href="https://www.acer.com/ac/es/AR/content/home" target="_blank">Soporte de acer </a>
  </div>
</div><BR></BR>


<a href="mostrar_soporte.php" class="btn btn-success" >  <span class="material-symbols-outlined" style="
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





<table border="2" class="table table-hover  table-bordered   table table-sm"  >
<tr style="background:#337ab7; color:WHITE;">
<td>code activo</td>
    <td>FECHA</td>
    <td>SERIAL</td>
    <TD>NOMBRE_EMPLEADO</TD>
    <td>PROBLEMA</td>
    <td>TAREAS REALIZADAS </td>
    <TD>SOLUCION</TD>
    <td>NUMERO DE CASO</td>
    <TD>PROVEEDOR</TD>
    

    <td>editar</td>
    

</tr>





<?php

$consulta=$con->query("SELECT * FROM soportes  WHERE 
code_activo LIKE '%$busqueda%'  or  FECHA LIKE '%$busqueda%'
 or  SERIAL LIKE '%$busqueda%'  or  NOMBRE_EMPLEADO LIKE '%$busqueda%'
  or  PROBLEMA LIKE '%$busqueda%' or  Tareas_Realizadas LIKE '%$busqueda%' or
   Solucion  LIKE '%$busqueda%'  or  Numero_caso  LIKE '%$busqueda%' or Proveedor  LIKE '%$busqueda%'    ");



while($row=$consulta->fetch_array()){

?>
<!-- tiene un error hay que fijarse en la correspondencia de la columnas -->

<tr class="table-info">

<td><?php echo $row['code_activo'] ?></td>
<td><?php echo $row['FECHA'] ?></td>
<td><?php echo $row['SERIAL'] ?></td>
<td><?php echo $row['NOMBRE_EMPLEADO'] ?></td>
<td><?php echo $row['PROBLEMA'] ?></td>
<td><?php echo $row['Tareas_Realizadas'] ?></td>
<td><?php echo $row['Solucion'] ?></td>
<td><?php echo $row['Numero_Caso'] ?></td>
<td><?php echo $row['Proveedor'] ?></td>


 
<TD><a href="update_suport.php ?id=<?php echo $row['code_activo'] ?>" class="btn btn-success" >   <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48">Inventory</span>Editar</a></TD>


</tr>

<?php
}

?>


</table>


    
</body>



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
