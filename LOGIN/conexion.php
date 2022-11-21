



<?php 
$conexion =null;
$servidor= 'localhost';
$bd= 'ves_asset' ;
$user = 'root';
$pass = '';

try{
    $conexion = new PDO('mysql:host='.$servidor. ';dbname=' .$bd, $user,$pass);

} catch (PDOException $e){
    echo "error de conexion!";
    exit;
}
return $conexion;




?>

