

<?php 

include("conexion.php");
$soportes = "SELECT * FROM soportes";


header("content-Type: application/vnd.ms-excel; UTF8 ");

header("content-Disposition: attachment;  filename=support.xls");



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>informe_soportes </title>

</head>
<body>

<table border="1">

<style>
  h1{
    text-align: center;
    background:gray;
    color: gray;
    background-color: gray;
  }
</style>

<!-- <caption  style="background:#3B4444;color:WHITE ;text-align: center;">INVENTORY</caption> -->
<h1> SUPPORT</h1>
<tr>
<th  style="background:#337ab7; color:WHITE;">code_activo</th>
<th style="background:#337ab7; color:WHITE;">FECHA</th>
<th style="background:#337ab7; color:WHITE;">SERIAL</th>
<th style="background:#337ab7; color:WHITE;">NOMBRE_EMPLEADO</th>
<th style="background:#337ab7; color:WHITE;">PROBLEMA</th>
<th style="background:#337ab7; color:WHITE;">Tareas_Realizadas</th>
<th style="background:#337ab7; color:WHITE;">Solucion</th>
<th style="background:#337ab7; color:WHITE;">Numero_caso</th>
<th style="background:#337ab7; color:WHITE;">Proveedor</th>


</tr>

<!-- Mix - Ozzy Osbourne - Tonight (Official Audio) -->

<?php $resultado = mysqli_query($conexion, $soportes);
while ($row=mysqli_fetch_assoc($resultado)) { ?>

<tr>

<td style="background:#8AF1F1 ; " ><?PHP echo $row["code_activo"];?></td>
<td style="background:#8AF1F1 ; "><?PHP echo $row["FECHA"];?></td>
<td style="background:#8AF1F1 ; "><?PHP echo $row["SERIAL"];?></td>
<td style="background:#8AF1F1 ;"><?PHP echo $row["NOMBRE_EMPLEADO"];?></td>
<td style="background:#8AF1F1 ;"><?PHP echo $row["PROBLEMA"];?></td>
<td style="background:#8AF1F1 ;"><?PHP echo $row["Tareas_Realizadas"];?></td>
<td style="background:#8AF1F1 ;"><?PHP echo $row["Solucion"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["Numero_Caso"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["Proveedor"];?></td>



</tr>

  <?php } mysqli_free_result($resultado);?>

</table>

  
</body>
</html>