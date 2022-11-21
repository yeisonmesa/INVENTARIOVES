
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 


// este codigo  error_reporting(0);  ayuda a quitar errores no nesesarios
 error_reporting(0);
session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->






<?php 

include("conexiondos.php");
session_start();
if(isset($_SESSION['username'])){
   

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN Y REGISTRO</title>
</head>
<body>
    <H1>YA INICIASTE SESSION <?php echo $_SESSION['username'];?></H1>
    
</body>
</html>

<?php
}else{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> registro</title>

    <link rel="stylesheet" href="../style/registrar.css" >

</head>
<body>

<div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        crear usuario
                    </div>
                    <form id="loginform" method="POST">
                        <input type="text" name="userreg" placeholder="Usuario" required>
                        
                        <input type="password" placeholder="Contraseña" name="pwreg" required>
                        <input type="password" placeholder="Contraseña" name="pwregveri" required>
                        
                        <button type="submit"  name="registrar" value="registrarme">Login</button>

                    </form>
                    <br/><br/>


<a href="pagina_segura.php">volver</a><br/><br/>

    <?php 
include("conexiondos.php");

if (isset($_POST['registrar'])) {
    if ($_POST['userreg'] == '' or $_POST['pwreg'] ==  '') {
        echo "debe llenar todos los campos please.";
    } else {
        $sql = 'SELECT * FROM login';
        $rec = mysqli_query($conexion, $sql);
        $verificar = 0;

        while ($resultado = mysqli_fetch_object($rec)) {
            if ($resultado->NOMBRE == $_POST['userreg']) {
                $verificar=1;
            }
        }
        if ($verificar == 0) {

            // paRA COMPARAR LAS DOS CONTRASEÑAS

if ($_POST['pwreg']  == $_POST['pwregveri']) {
    $nom = $_POST['userreg'];
    $pw = $_POST['pwreg'];
    $pw_en = password_hash($pw, PASSWORD_DEFAULT);

    // -------si las contraseñas no coinciden arrojara un mesaje de error--------------------------


    $conexion->query("INSERT INTO  login (NOMBRE,CONTRASEÑA) VALUES ('$nom','$pw')");
    mysqli_query($conexion, $sql);

    // echo "TE HAS REGISTRADO CON EXITO.";
    echo '<script> alert("TE HAS REGISTRADO CON EXITO¡ ")</script>';

}else{

echo "las contraseñas no coinciden.";

}


        } else {

        //    echo "<script>El nombre de usuario ya existe crea otro</script>";

        echo '<script> alert("El nombre de usuario ya existe crea otro ")</script>';
            // echo "El nombre de usuario ya existe crea otro";
        }
    }
}

?>
    
</body>
</html>
<?php 
}
?>

<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:../index.html");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->
