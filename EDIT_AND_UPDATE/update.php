
<?php 


// este codigo  error_reporting(0);  ayuda a quitar errores no nesesarios
//  error_reporting(0);
session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->






<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM inventory WHERE code_activo='$id'";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualizar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">





</head>
<body>

<link rel="stylesheet" href="../style/update.css">

<H1>ACTUALIZAR INVENTARIO</H1>

<div class="container ">


<form action="ACTUALIZA.PHP" method="POST" class="form">


<div class="contenedor-inputs">


<INPUT type="hidden" name="code_activo" value="<?php echo $row['code_activo']?>">
<!-- este input captura el id DEL ATRIBUTO  -->


<LABEL class="lbl-nombre">NOMBRE:</LABEL></BR>
<input type="text" class="form " name="NOMBRE" placeholder="NOMBRE" value="<?php echo $row['NOMBRE'] ?>"> <br>


<LABEL>POSITION:</LABEL><br>
<input type="text" class="form " name="POSITION" placeholder="POSITION" value="<?php echo $row['POSITION'] ?>"><br>

<LABEL>DEPARMENT:</LABEL><br>
<input type="text" class="form " name="Deparment" placeholder="deparment" value="<?php echo $row['Deparment'] ?>"><br>


<LABEL>COMPUTER:</LABEL></BR>
<input type="text" class="form" name="COMPUTER" placeholder="COMPUTER" value="<?php echo $row['COMPUTER'] ?>"><br>

<LABEL>MARCA</LABEL></BR>
<input type="text" class="form " name="MARCA" placeholder="MARCA" value="<?php echo $row['MARCA'] ?>"><br>


<LABEL>MODELO_REFERENCIA:</LABEL></BR>
<input type="text" class="form" name="MODELO_REFERENCIA" placeholder="MODELO_REFERENCIA" value="<?php echo $row['MODELO_REFERENCIA'] ?>"><br>

<LABel>PROCESSOR:</LABel></BR>
<input type="text" class="form " name="PROCESSOR" placeholder="PROCESSOR" value="<?php echo $row['PROCESSOR'] ?>"><br>

<LABEL>Email:</LABEL></BR>
<input type="Email" class="form " name="Email" placeholder="Email" value="<?php echo $row['Email'] ?>"><br>

<!-- NOTA = SI NO FUNCIONA LA ACTUALIZACION HAY QUE FIJARSE EN MAYUSCULAS Y MINUSCULAS DE LA BASE DE DATOS -->

<label >CONTRASEÑA:</label></BR>
<input type="text" class="form " name="CONTRASEÑA" placeholder="CONTRASEÑA" value="<?php echo $row['CONTRASEÑA'] ?>"><br>

<LABEL>PIN</LABEL></BR>
<input type="text" class="form " name="PIN" placeholder="PIN" value="<?php echo $row['PIN'] ?>"><br>


<LABEL>NOMBRE_EQUIPO:</LABEL></BR>
<input type="text" class="form " name="NOMBRE_EQUIPO" placeholder="NOMBRE_EQUIPO" value="<?php echo $row['NOMBRE_EQUIPO'] ?>"><br>


<label >comment:</label></BR>
<input type="text" class="form " name="comment" placeholder="comment" value="<?php echo $row['comment'] ?>"><br>

<label >cambios realizados:</label></BR>
<input type="text" class="form " name="CAMBIO" placeholder="CAMBIO" value="<?php echo $row['CAMBIO'] ?>"><br>


<LABEL>RAM:</LABEL></BR>
<input type="text" class="form " name="RAM" placeholder="RAM" value="<?php echo $row['RAM'] ?>"><br>

<LABEL>HARD DRIVE</LABEL></BR>
<input type="text" class="form " name="HARD_DRIVE" placeholder="HARD_DRIVE" value="<?php echo $row['HARD_DRIVE'] ?>"><br>

<LABEL>SERIAL CARGADOR</LABEL></BR>
<input type="text" class="form " name="SERIAL_CARGADOR" placeholder="SERIAL_CARGADOR" value="<?php echo $row['SERIAL_CARGADOR'] ?>"><br>

<LABEL>NUMERO PARTE CARGADOR:</LABEL></BR>
<input type="text" class="form " name="NUMERO_PARTE_CARGADOR" placeholder="NUMERO_PARTE_CARGADOR" value="<?php echo $row['NUMERO_PARTE_CARGADOR'] ?>"><br>

<LABEL>PROVEEDOR</LABEL></BR>
<input type="text" class="form " name="PROVEEDOR" placeholder="PROVEEDOR" value="<?php echo $row['PROVEEDOR'] ?>"><br>

<LABEL>FECHA_COMPRA</LABEL></BR>
<input type="date" class="form " name="FECHA_COMPRA" placeholder="FECHA_COMPRA" value="<?php echo $row['FECHA_COMPRA'] ?>"><br>

<LABEL>COSTO EQUIPO:</LABEL></BR>
<input type="number" class="form " name="COSTO_EQUIPO" placeholder="COSTO_EQUIPO" value="<?php echo $row['COSTO_EQUIPO'] ?>"><br>


<button class="btn btn-primary ">actualizar</button>

<!-- <input type="submit" class="btn btn-primary btn block" value= "Actualizar"> -->

<a href="/INVENTARIOdos/inventory.php"  class="btn btn-primary">REGRESAR</a>

</div>

</form>


</div>
    

</body>
</html>


<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:INVENTARIOdos/inventory.php");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->