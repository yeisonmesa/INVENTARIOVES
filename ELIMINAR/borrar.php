



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






// $sqldos="CREATE TRIGGER cinco
// BEFORE UPDATE ON inventory 
// FOR EACH ROW 
// BEGIN
// INSERT INTO retirados SELECT * FROM inventory WHERE code_activo='$code_activo'; 



// END;";
// $querydos=mysqli_query($con,$sqldos);

$sql=" UPDATE inventory
SET NOMBRE='NO ASIGNADO', POSITION='NO ASIGNADO', Deparment='NO ASIGNADO' ,  Email='NOASIGNADO@gmail.com', CONTRASEÑA='NO ASIGNADO', PIN='NO ASIGNADO'
WHERE code_activo='$code_activo'    ";
     
$query=mysqli_query($con,$sql);





if ($query) {
   
    echo '<script> alert("usuario retirado")</script>';
    header("location:/INVENTARIOdos/inventory.php");

    
    // DROP TRIGGER IF EXISTS DOS  

}
else {
    echo '<script> alert("no retirado")</script>';
}






// if ($querydos) {
//     echo '<script> alert("Informacion PASADA")</script>';
//     header("location:/INVENTARIOdos/inventory.php");
//     // el lugar al que quiero volver
// }


// else {
//     echo '<script> alert("errores ")</script>';
// }



?>