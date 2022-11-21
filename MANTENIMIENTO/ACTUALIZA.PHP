

<?php 


// este codigo  error_reporting(0);  ayuda a quitar errores no nesesarios
//  error_reporting(0);
session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->



<?php 
include("conexion.php");





$id=$_POST['id'];
$code_activo=$_POST['code_activo'];
$nombre=$_POST['nombre'];
$falla=$_POST['falla'];
$team=$_POST['team'];
$Equipo_owner=$_POST['Equipo_owner'];
$Dia_mantenimiento=$_POST['Dia_mantenimiento'];

$Equipo_borrowed=$_POST['Equipo_borrowed'];
$Dia_entregado=$_POST['Dia_entregado'];

// se usa un codigo SQL para insertar los valores en la base de datos

$sql="UPDATE mantenimiento SET 
     
    code_activo='$code_activo',    
    nombre='$nombre',
    falla='$falla',
    team='$team',
    Equipo_owner='$Equipo_owner',
    Dia_mantenimiento='$Dia_mantenimiento',  
    Equipo_borrowed='$Equipo_borrowed', 
    Dia_entregado='$Dia_entregado' 
    WHERE id='$id'";
    

$query=mysqli_query($con,$sql);


if ($query) {
    // echo '<script> alert("Informacion Actualizada")</script>';
    // header("location:/inventariodos/MANTENIMIENTO/Visualizar_mantenimiento.php");



    echo "<script language='JavaScript'>
    alert('Los datos de mantenimiento se actualizaron');
    location.assign('/inventariodos/MANTENIMIENTO/Visualizar_mantenimiento.php');
    </script>";

    
    // el lugar al que quiero volver
}

else {
    echo '<script> alert("errores al ingresar datos")</script>';
}




?>

<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:INVENTARIOdos/inventory.php");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->