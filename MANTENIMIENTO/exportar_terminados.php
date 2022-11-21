<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->




<?php 

include("CONEXION.PHP");
$mantenimiento = "SELECT * FROM mmt_make";

header("content-Type: application/vnd.ms-excel; UTF8 ");

header("content-Disposition: attachment;  filename=mantenimiento_terminado.xls");



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>informe mantenimiento</title>

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
<h1>mantenimiento</h1>
<tr>
<th  style="background:#337ab7; color:WHITE;">#</th>
<th  style="background:#337ab7; color:WHITE;">code_activo</th>
<th style="background:#337ab7; color:WHITE;">empleado</th>
<th style="background:#337ab7; color:WHITE;">falla</th>
<th style="background:#337ab7; color:WHITE;">team</th>
<th style="background:#337ab7; color:WHITE;">Equipo_owner</th>
<th style="background:#337ab7; color:WHITE;">Dia mantenimento</th>
<th style="background:#337ab7; color:WHITE;">Equipo_borrowed</th>
<th style="background:#337ab7; color:WHITE;">Dia entregado</th>



</tr>


<?php $resultado = mysqli_query($con, $mantenimiento);
while ($row=mysqli_fetch_assoc($resultado)) { ?>

<tr>
<td  style="background:#8AF1F1 ;" ><?PHP echo $row["id"];?></td>
<td  style="background:#8AF1F1 ;" ><?PHP echo $row["code_activo"];?></td>
<td style="background:#8AF1F1 ; "><?PHP echo $row["nombre"];?></td>
<td style="background:#8AF1F1 ; "><?PHP echo $row["falla"];?></td>
<td style="background:#8AF1F1 ;"><?PHP echo $row["team"];?></td>
<td style="background:#8AF1F1 ;"><?PHP echo $row["Equipo_owner"];?></td>
<td style="background:#8AF1F1 ;"><?PHP echo $row["Dia_mantenimiento"];?></td>
<td style="background:#8AF1F1 ;"><?PHP echo $row["Equipo_borrowed"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["Dia_entregado"];?></td>




</tr>

  <?php } mysqli_free_result($resultado);?>

</table>

  
</body>
</html>

<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:../index.html");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->
