
<?php 


// este codigo  error_reporting(0);  ayuda a quitar errores no nesesarios
//  error_reporting(0);
session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->






<?php 
    include("conexion.php");
   

    $id=$_GET['id'];

    $sql="SELECT * FROM mantenimiento WHERE id='$id'";
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

<H1>ACTUALIZAR info mantenimiento</H1>

<div class="container ">


<form action="ACTUALIZA.PHP" method="POST" class="form">


<div class="contenedor-inputs">


<INPUT type="hidden" name="id" value="<?php echo $row['id']?>">
<!-- este input captura el id DEL ATRIBUTO  -->

<LABEL class="lbl-nombre">code_activo:</LABEL></BR>
<input type="number" class="form " name="code_activo" placeholder="code_activo" value="<?php echo $row['code_activo'] ?>"> <br>


<LABEL class="lbl-nombre">NOMBRE:</LABEL></BR>
<input type="text" class="form " name="nombre" placeholder="NOMBRE" value="<?php echo $row['nombre'] ?>"> <br>


<LABEL>FALLA:</LABEL><br>
<input type="text" class="form " name="falla" placeholder="falla" value="<?php echo $row['falla'] ?>"><br>

<LABEL>team:</LABEL><br>
<input type="text" class="form " name="team" placeholder="team" value="<?php echo $row['team'] ?>"><br>


<LABEL>Equipo_owner:</LABEL></BR>
<input type="text" class="form" name="Equipo_owner" placeholder="Equipo_owner" value="<?php echo $row['Equipo_owner'] ?>"><br>

<LABEL>Dia mantenimiento</LABEL></BR>
<input type="date" class="form " name="Dia_mantenimiento" placeholder="Dia mantenimiento" value="<?php echo $row['Dia_mantenimiento'] ?>"><br>


<LABEL>Equipo_borrowed:</LABEL></BR>
<input type="text" class="form" name="Equipo_borrowed" placeholder="Equipo_borrowed" value="<?php echo $row['Equipo_borrowed'] ?>"><br>

<LABel>Dia devolucion:</LABel></BR>
<input type="date" class="form " name="Dia_entregado" placeholder="dia devolucion" value="<?php echo $row['Dia_entregado'] ?>"><br>


<button class="btn btn-primary ">actualizar</button>

<!-- <input type="submit" class="btn btn-primary btn block" value= "Actualizar"> -->

<a href="/inventariodos/MANTENIMIENTO/Visualizar_mantenimiento.php"  class="btn btn-primary">REGRESAR</a>

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