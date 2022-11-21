

<?php 

include("CONEXION.PHP");
$retirados = "SELECT * FROM retirados";


header("content-Type: application/vnd.ms-excel; UTF8 ");

header("content-Disposition: attachment;  filename=Retired.xls");



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

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
<h1> Retired</h1>
<tr>
<th  style="background:#337ab7; color:WHITE;">code_activo</th>
<th style="background:#337ab7; color:WHITE;">NOMBRE</th>
<th style="background:#337ab7; color:WHITE;">POSITION</th>
<th style="background:#337ab7; color:WHITE;">Deparment</th>
<th style="background:#337ab7; color:WHITE;">COMPUTER</th>
<th style="background:#337ab7; color:WHITE;">MARCA</th>
<th style="background:#337ab7; color:WHITE;">MODELO_REFERENCIA</th>
<th style="background:#337ab7; color:WHITE;">SERIALES</th>
<th style="background:#337ab7; color:WHITE;">PROCESSOR</th>
<th style="background:#337ab7; color:WHITE;">Email</th>
<th style="background:#337ab7; color:WHITE;">CONTRASEÑA</th>
<th style="background:#337ab7; color:WHITE;">PIN</th>
<th style="background:#337ab7; color:WHITE;">NOMBRE_EQUIPO</th>
<th style="background:#337ab7; color:WHITE;">comment</th>
<th style="background:#337ab7; color:WHITE;">CAMBIO</th>
<th style="background:#337ab7; color:WHITE;">RAM</th>
<th style="background:#337ab7; color:WHITE;">HARD_DRIVE</th>
<th style="background:#337ab7; color:WHITE;">SERIAL_CARGADOR</th>
<th style="background:#337ab7; color:WHITE;">NUMERO_PARTE_CARGADOR</th>
<th style="background:#337ab7; color:WHITE;">PROVEEDOR</th>
<th style="background:#337ab7; color:WHITE;">FECHA_COMPRA</th>
<TH style="background:#337ab7; color:WHITE;">COSTO_EQUIPO</TH>

</tr>


<?php $resultado = mysqli_query($conexion, $retirados);
while ($row=mysqli_fetch_assoc($resultado)) { ?>

<tr>

<td style="background:#8AF1F1 ; " ><?PHP echo $row["code_activo"];?></td>
<td style="background:#8AF1F1 ; "><?PHP echo $row["NOMBRE"];?></td>
<td style="background:#8AF1F1 ; "><?PHP echo $row["POSITION"];?></td>
<td style="background:#8AF1F1 ;"><?PHP echo $row["Deparment"];?></td>
<td style="background:#8AF1F1 ;"><?PHP echo $row["COMPUTER"];?></td>
<td style="background:#8AF1F1 ;"><?PHP echo $row["MARCA"];?></td>
<td style="background:#8AF1F1 ;"><?PHP echo $row["MODELO_REFERENCIA"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["SERIALES"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["PROCESSOR"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["Email"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["CONTRASEÑA"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["PIN"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["NOMBRE_EQUIPO"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["comment"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["CAMBIO"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["RAM"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["HARD_DRIVE"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["SERIAL_CARGADOR"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["NUMERO_PARTE_CARGADOR"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["PROVEEDOR"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["FECHA_COMPRA"];?></td>
<td  style="background:#8AF1F1 ;"><?PHP echo $row["COSTO_EQUIPO"];?></td>



</tr>

  <?php } mysqli_free_result($resultado);?>

</table>

  
</body>
</html>