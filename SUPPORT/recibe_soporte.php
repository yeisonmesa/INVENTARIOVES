<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 
// error_reporting(0);
session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->





<?php 

include("conexion.php");
$con=conectar();

$code_activo=$_POST['code_activo'];
$FECHA=$_POST['FECHA'];
$SERIAL=$_POST['SERIAL'];
$NOMBRE_EMPLEADO=$_POST['NOMBRE_EMPLEADO'];
$PROBLEMA=$_POST['PROBLEMA'];
$Tareas_Realizadas=$_POST['Tareas_Realizadas'];
$Solucion=$_POST['Solucion'];
$Numero_Caso=$_POST['Numero_Caso'];
$Proveedor=$_POST['Proveedor'];


$sql ="INSERT INTO soportes VALUES ('$code_activo','$FECHA','$SERIAL','$NOMBRE_EMPLEADO','$PROBLEMA',
'$Tareas_Realizadas','$Solucion','$Numero_Caso','$Proveedor') ";
$query=mysqli_query($con,$sql);




if ($query) {
    echo "<script language='JavaScript'>
    alert('informacion ingresada correctamente');
    location.assign('index.php');
    </script>";

}else {
    echo "<script language='JavaScript'>
    alert('error al insertar datos fijese en ingresar informacion correspondiente');
    </script>";
    

}

?>




<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:/inventariodos/index.html");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->
