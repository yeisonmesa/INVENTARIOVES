
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->






<?php

include("conexion.php");





$code_activo=$_POST['code_activo'];
$nombre=$_POST['nombre'];
$falla=$_POST['falla'];
$team=$_POST['team'];
$Equipo_owner=$_POST['Equipo_owner'];
$Dia_mantenimento=$_POST['Dia_mantenimiento'];

$Equipo_borrowed=$_POST['Equipo_borrowed'];
$Dia_entregado=$_POST['Dia_entregado'];

$sql="INSERT INTO mantenimiento (code_activo,nombre,falla,team,Equipo_owner,Dia_mantenimiento,Equipo_borrowed,Dia_entregado)  VALUES  ('$code_activo','$nombre','$falla','$team','$Equipo_owner',
'$Dia_mantenimento','$Equipo_borrowed','$Dia_entregado')";

$query=mysqli_query($con,$sql);

if($query){


    echo "<script language='JavaScript'>
    alert('cita agregada correctamente');
    location.assign('formulario_mantenimiento.php');
    </script>";
    

    // echo '<script> alert("insercion realizada corretamente")</script>';
    





   

    // Header("Location:inventariob.php");
    
}else {

    echo '<script> alert("error al insertar datos fijese en ingresar informacion correspondiente")</script>';

}
?>

<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:../index.html");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->
