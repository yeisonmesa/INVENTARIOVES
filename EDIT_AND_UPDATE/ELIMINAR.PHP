<?php 

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM inventory  WHERE code_activo='$id'";
$query =mysqli_query($con,$sql);

if ($query) {

    echo "<script language='JavaScript'>
    alert('Los datos se borraron');
    location.assign('MUESTRA.php');
    </script>";
    
    // header("location: MUESTRA.php");
}


?>