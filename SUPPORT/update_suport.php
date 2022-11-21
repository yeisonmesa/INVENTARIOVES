
<?php 


// este codigo  error_reporting(0);  ayuda a quitar errores no nesesarios
//  error_reporting(0);
// session_start();
// if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->






<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM soportes WHERE code_activo='$id'";
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

<link rel="stylesheet" href="/INVENTARIODOS/SUPPORT/soportes_css/actualizar_soporte.css">

<H1>ACTUALIZAR SOPORTE</H1>

<div class="container ">


<form action="ACTUALIZA_SOPORTE.PHP" method="POST" class="form">


<div class="contenedor-inputs">


<INPUT type="hidden" name="code_activo" value="<?php echo $row['code_activo']?>">
<!-- este input captura el id DEL ATRIBUTO  -->



<LABEL class="lbl-nombre">Fecha:</LABEL></BR>
<input type="DATE" class="form " name="FECHA" placeholder="fecha" value="<?php echo $row['FECHA'] ?>"> <br>


<LABEL>Serial:</LABEL><br>
<input type="text" class="form " name="SERIAL" placeholder="SERIAL" value="<?php echo $row['SERIAL'] ?>"><br>

<LABEL>nombre:</LABEL><br>
<input type="text" class="form " name="NOMBRE_EMPLEADO" placeholder="NOMBRE_EMPLEADO" value="<?php echo $row['NOMBRE_EMPLEADO'] ?>"><br>


<LABEL>Problema:</LABEL></BR>
<input type="text" class="form" name="PROBLEMA" placeholder="PROBLEMA" value="<?php echo $row['PROBLEMA'] ?>"><br>

<LABEL>Tareas realizadas</LABEL></BR>
<input type="comment" class="form " name="Tareas_Realizadas" placeholder="Tareas_Realizadas" value="<?php echo $row['Tareas_Realizadas'] ?>"><br>


<LABEL>Solucion:</LABEL></BR>
<input type="text" class="form" name="Solucion" placeholder="solucion" value="<?php echo $row['Solucion'] ?>"><br>

<LABel>Numero de caso :</LABel></BR>
<input type="text" class="form " name="Numero_Caso" placeholder="numero de caso" value="<?php echo $row['Numero_Caso'] ?>"><br>

<LABel>Proveedor:</LABel></BR>
<input type="text" class="form " name="Proveedor" placeholder="Proveedor" value="<?php echo $row['Proveedor'] ?>"><br>



<button class="btn btn-primary "  onclick="return confirmupdate()"> update</button>

<script type="text/javascript">
    function confirmupdate()
    {
        var respuesta = confirm("estas a punto de actualizar informacion al empleado ");
    
    if (respuesta == true)
     {
        
return true;

    }
    else{
        return false;
    }


    }


</script>






<!-- <input type="submit" class="btn btn-primary btn block" value= "Actualizar"> -->

<a href="index.php"  class="btn btn-primary">REGRESAR</a>

</div>

</form>


</div>
    

</body>
</html>


<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

// }else {
   
//     header("location:INVENTARIOdos/inventory.php");

// }

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->