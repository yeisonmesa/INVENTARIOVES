
<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
<style>
ul{

    list-style-type: none;
    width: 200px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;

}

li a:hover{
    background-color: #555;
    color: white; 
}
</style>
</head>
<body>
<ul>
    <li><a href="/inventariodos/index.html">inicio</a></li>
    <li><a href="registrar.php">crear abministrador</a></li>
    <li><a href="/INVENTARIOdos/home/inventariob.php">formulario</a></li>
    <li><a href="/INVENTARIOdos/inventory.php">abministar base de datos</a></li>
      <li><a href="salir.php">Cerrar sesion</a></li>
    </ul>
</body>
</html>
 -->

<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title> abmin</title>

</head>

<link rel="stylesheet" href="pagina_segura.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<body>



<!-- <h2> <?php echo "<h4> usuario/a ".$_SESSION['usuario']. "</h4"; ?> </h2> -->




<header>


    <nav class="navegacion">
        <ul class="menu">
        
            <li><a href=""><h4 > <span class="material-symbols-outlined">account_circle</span>  <?php echo $_SESSION['usuario']. "</h4"; ?> </h4> </a></li>

            <li> <a href="registrar.php"><span class="material-symbols-outlined">person_add</span>CREAR NUEVO ADMIN</a></li>

            <li><a href="/INVENTARIOdos/home/inventariob.php">  <span class="material-symbols-outlined">inventory</span>FORMULARIO</a></li>
            <!-- /INVENTARIOdos/MANTENIMIENTO/formulario_mantenimiento.php -->

            <li><a href="/INVENTARIOdos/MANTENIMIENTO/formulario_mantenimiento.php">  <span class="material-symbols-outlined">
desktop_access_disabled
</span>MANTENIMIENTO</a></li>

            <ul class="submenu">
            <li><a href="/INVENTARIOdos/inventory.php">ABMINISTRAR BASE DATOS</a></li>
            <li><a href="/INVENTARIOdos/busqueda.php">BUSCAR INVENTARIO</a></li>
            <li><a href="/INVENTARIOdos/SUPPORT/mostrar_soporte.php">SUPPORT</a></li>
            <li><a href="../IMPRESORAS/impresoras.php">IMPRESORAS</a></li>

            </ul>
            

            <li><a href="salir.php"> <span class="material-symbols-outlined">do_not_disturb_on</span>CERRAR SESSION</a></li>


        </ul>

    </nav>
</header>


    
</body>
</html>


<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:iniciarsession.php");
    

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->



