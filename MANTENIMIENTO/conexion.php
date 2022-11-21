<?php  

$host = "localhost";
$user = "root";
$pass = "";
$db = "ves_asset";

$con = new mysqli($host,$user,$pass,$db);

if ($con->connect_errno){
    die("error inesperado");
}

?>
