<?php 
include("conexion.php");
$con=conectar();

// se debe incluir la conexion a base de datos 
// con este codigo recibimos los datos
$id=$_POST['id'];
$code_activo=$_POST['code_activo'];
$comment=$_POST['comment'];

$sql= "UPDATE comentarios  SET 

code_activo='$code_activo',comment='$comment'


 WHERE id='$id'";

$query=mysqli_query($con,$sql);

if ($query) {
    // echo '<script> alert("Informacion Actualizada")</script>';
    // header("location:/INVENTARIOdos/inventory.php");

    // echo "<script language='JavaScript'>
    // alert('informacion de notas actualizada');
    // location.assign('location:/INVENTARIOdos/busqueda.php');
    // </script>";
    // el lugar al que quiero volver

    
    echo "<script language='JavaScript'>
    alert('info de notas actualizado');
    location.assign('/INVENTARIOdos/busqueda.php');
    </script>";

}

else {
    echo '<script> alert("errores al actualizar infoprmacion ")</script>';
}




?>