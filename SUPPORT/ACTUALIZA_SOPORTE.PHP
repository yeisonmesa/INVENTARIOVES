<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 
error_reporting(0);
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

$sql="UPDATE soportes SET  code_activo='$code_activo',  FECHA='$FECHA', 
SERIAL='$SERIAL', NOMBRE_EMPLEADO='$NOMBRE_EMPLEADO', PROBLEMA='$PROBLEMA', Tareas_Realizadas='$Tareas_Realizadas',
Solucion='$Solucion',Numero_Caso='$Numero_Caso',Proveedor='$Proveedor'
  WHERE code_activo='$code_activo' ";

$query=mysqli_query($con,$sql);

if ($query) {
    
    echo "<script language='JavaScript'>
    alert('los datos de actualizaron correctamente');
    location.assign('mostrar_soporte.php');
    </script>";


}

else {
    echo "<script language='JavaScript'>
    alert('error al actualizar informacion');
    location.assign('index.php');
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
