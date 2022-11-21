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

// se debe incluir la conexion a base de datos 
// con este codigo recibimos los datos

$code_activo=$_POST['code_activo'];
$NOMBRE=$_POST['NOMBRE'];
$POSITION=$_POST['POSITION'];
$Deparment=$_POST['Deparment'];
$COMPUTER=$_POST['COMPUTER'];

$MARCA=$_POST['MARCA'];
$MODELO_REFERENCIA=$_POST['MODELO_REFERENCIA'];


// $SERIALES=$_POST['SERIALES'];


$PROCESSOR=$_POST['PROCESSOR'];

$Email=$_POST['Email'];
$CONTRASEÑA=$_POST['CONTRASEÑA'];
$PIN=$_POST['PIN'];
$NOMBRE_EQUIPO=$_POST['NOMBRE_EQUIPO'];
$comment=$_POST['comment'];
$CAMBIO=$_POST['CAMBIO'];
$RAM=$_POST['RAM'];
$HARD_DRIVE=$_POST['HARD_DRIVE'];
$SERIAL_CARGADOR=$_POST['SERIAL_CARGADOR'];
$NUMERO_PARTE_CARGADOR=$_POST['NUMERO_PARTE_CARGADOR'];
$PROVEEDOR=$_POST['PROVEEDOR'];
$FECHA_COMPRA=$_POST['FECHA_COMPRA'];
$COSTO_EQUIPO=$_POST['COSTO_EQUIPO']; 


// se usa un codigo SQL para insertar los valores en la base de datos

$sql="UPDATE inventory SET 

NOMBRE='$NOMBRE',POSITION='$POSITION',Deparment='$Deparment',COMPUTER='$COMPUTER',MARCA='$MARCA', MODELO_REFERENCIA='$MODELO_REFERENCIA',  
   PROCESSOR='$PROCESSOR',  Email='$Email', CONTRASEÑA='$CONTRASEÑA', PIN='$PIN',   NOMBRE_EQUIPO='$NOMBRE_EQUIPO',
comment='$comment', CAMBIO='$CAMBIO', RAM='$RAM', HARD_DRIVE='$HARD_DRIVE',  SERIAL_CARGADOR='$SERIAL_CARGADOR', NUMERO_PARTE_CARGADOR='$NUMERO_PARTE_CARGADOR',
PROVEEDOR='$PROVEEDOR', FECHA_COMPRA='$FECHA_COMPRA', COSTO_EQUIPO='$COSTO_EQUIPO' WHERE code_activo='$code_activo'  ";
$query=mysqli_query($con,$sql);

if ($query) {
    echo '<script> alert("Informacion Actualizada")</script>';
    header("location:/INVENTARIOdos/inventory.php");
    // el lugar al que quiero volver
}

else {
    echo '<script> alert("errores al ingresar datos")</script>';
}




?>

<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:../index.html");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

