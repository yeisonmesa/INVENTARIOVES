<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema de login</title>
</head>
<style>
    body {font-family:Arial,Helvetica, sans-serif;}
    form {border: 3px solid #f1f1f1; padding: 16px;}
</style>
<link rel="stylesheet" href="../style/iniciarsession.css" >

<body>


<div id="contenedor">
    
            
            <div id="contenedorcentrado">
                <div id="login">
                    <form id="loginform" action="" method="POST">
                        <label for="txt1">Usuario</label>
                        <input id="usuario" type="text" name="nombre" placeholder="Usuario" required>
                        
                        <label for="txt1">Contraseña</label>
                        <input id="password" type="password" placeholder="Contraseña" name="contraseña" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar" value="ingresar">Login</button>
                    </form>
                    
                </div>
<!-- <form action="" method="POST">

<H3>LOGIN DE USUARIO</H3>

<label for="txt1">nombre:</label>
<input type="" name="nombre" required>
<br>
<br>

<label for="txt1">contraseña:</label>
<input type="" name="contraseña" required>
<br>

<input type="submit" name="" value="Ingresar">

</form> -->


    
</body>

<?php

if ($_POST) {
    session_start();
    require('conexion.php ');
    $u = $_POST['nombre'];
    $p = $_POST['contraseña'];
    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conexion->prepare("SELECT * FROM login WHERE NOMBRE= :u AND CONTRASEÑA = :p ");

    $query -> bindParam(":u" , $u);
    $query -> bindParam(":p" , $p);

    $query->execute();
    $usuario = $query-> fetch(PDO::FETCH_ASSOC);

    if ($usuario){
        $_SESSION['usuario'] = $usuario["NOMBRE"];
        header("location:Pagina_segura.php");

    
     }else {
        echo "usuario o password son invalidos";
     }


}

?>
</html>