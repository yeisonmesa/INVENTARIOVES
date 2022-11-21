<?php 
    include("conexion.php");


    $id=$_GET['id'];

    $sql= "DELETE  FROM mantenimiento WHERE id='$id' ";
    $query=mysqli_query($con,$sql);

    if ($query) {
        
        echo "<script language='JavaScript'>
        alert('EL MANTENIMIENTO HA SIDO TERMINADO');
        location.assign('/inventariodos/MANTENIMIENTO/Visualizar_mantenimiento.php');
        </script>";


    }

    // $row=mysqli_fetch_array($query);

?>