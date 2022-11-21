
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->






<?php
include("../conexion.php");
// $con=conectar();


$code_activo=$_POST['code_activo'];
$NOMBRE=$_POST['NOMBRE'];
$POSITION=$_POST['POSITION'];
$Deparment=$_POST['Deparment'];
$COMPUTER=$_POST['COMPUTER'];

$MARCA=$_POST['MARCA'];
$MODELO_REFERENCIA=$_POST['MODELO_REFERENCIA'];
$SERIALES=$_POST['SERIALES'];
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

$sql="INSERT INTO inventory VALUES('$code_activo','$NOMBRE','$POSITION','$Deparment','$COMPUTER','$MARCA','$MODELO_REFERENCIA','$SERIALES','$PROCESSOR', '$Email','$CONTRASEÑA'
,'$PIN','$NOMBRE_EQUIPO','$comment' ,'$CAMBIO','$RAM' ,'$HARD_DRIVE','$SERIAL_CARGADOR',
'$NUMERO_PARTE_CARGADOR','$PROVEEDOR' ,'$FECHA_COMPRA','$COSTO_EQUIPO'  )";

$query= mysqli_query($con,$sql);

if($query){


    echo "<script language='JavaScript'>
    alert('informacion ingresada correctamente');
    location.assign('MUESTRA.php');
    </script>";
    

    // echo '<script> alert("insercion realizada corretamente")</script>';
    

    Header("Location:inventariob.php");



   

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
