
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 
error_reporting(0);
session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->








<?php 
include('conexion.php');
$con=conectar();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soportes</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


</head>


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


</style>
<body>

<a href="/INVENTARIOdos/LOGIN/PAGINA_SEGURA.PHP">  <span class="material-symbols-outlined">
desktop_windows
</span>pagina principal</a>
<br/>
<a href="/INVENTARIOdos/SUPPORT/INDEX.PHP">  <span class="material-symbols-outlined">
assignment
</span>FORMULARIO SOPORTE</a>
<br>

<a href="/INVENTARIOdos/SUPPORT/informe soportes/soporte.php">  <span class="material-symbols-outlined">
assignment
</span>informe</a>






<form action="BUCAR_SOPORTE.PHP" method="post">

<input type="text" name="busqueda" > <br>  
<input type="submit" name="enviar" value="buscar">
</form>
<br>
<br>
    

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



$consulta=$con->query("SELECT * FROM Soportes ");



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



<TD><a href=" update_suport.php ? id=<?php echo $row['code_activo'] ?>" class="btn btn-info" >Editar</a></TD>
<?php
}

?>


</table>



</body>
</html>






<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:/inventariodos/index.html");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->
