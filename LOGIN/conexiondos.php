

<?php 



$host = 'localhost';
$hostuser = 'root';
$hostpw= '';

$hostdb= 'ves_asset';

$conexion = mysqli_connect($host,$hostuser,$hostpw,$hostdb);


if ($conexion) {
    return "conectado";
}else{
    return "no conectado";

}





?>

