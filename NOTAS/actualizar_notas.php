
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

    $sql="SELECT * FROM comentarios WHERE id='$id'";
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

<H1>Modificar Notas</H1>

<div class="container ">


<form action="ACTUALIZA_NOTAS.PHP" method="POST" class="form">


<div class="contenedor-inputs">


<INPUT type="hidden" name="id" value="<?php echo $row['id']?>">
<!-- este input captura el id DEL ATRIBUTO  -->


<LABEL class="lbl-nombre">code_activo:</LABEL></BR>
<input type="number" class="form " name="code_activo" placeholder="codigo activo" value="<?php echo $row['code_activo'] ?>"> <br>


<LABEL>comment:</LABEL><br>
<input type="text" class="form " name="comment" placeholder="comentario" value="<?php echo $row['comment'] ?>"><br>


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