<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 
// error_reporting(0);
session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soportes </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>


       

<link rel="stylesheet" href="/INVENTARIODOS/SUPPORT/soportes_css/formulario_soporte.css">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
<body>


<!-- <a href="mostrar_soporte.php">HISTORIAL <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48">history</span>   -->


<a href="mostrar_soporte.php">  <span class="material-symbols-outlined">
HISTORY
</span>HISTORY</a>
<form action="recibe_soporte.php" method="post">

<style>

  a{
    
    background-color: blue;
 
  }

  span{
   
    background-color: blue;
    

  }
</style>


<h2 class="form__titulo">ingrese informacion de soporte</h2>
        <div class="contenedor-inputs">
        
     

       
        <!-- <input type="number" name="code_activo" placeholder="code_activo"  class="input-48" > -->
        <input type="number" name="code_activo" placeholder="codigo de activo" class="input-100" required>
        <input type="date" name="FECHA" placeholder="FECHA" class="input-100" required>
        <input type="text" name="SERIAL"  placeholder="serial" class="input-100" required>
        <input type="text" name="NOMBRE_EMPLEADO" placeholder="nombre empleado"  class="input-48" >
        <input type="text" name="PROBLEMA" placeholder="PROBLEMA"  class="input-100" required>
        <input type="text" name="Tareas_Realizadas" placeholder="Tareas_Realizadas"  class="input-100" required>
        <input type="text" name="Solucion" placeholder="solucion"  class="input-100" required>
        <input type="text" name="Numero_Caso" placeholder="numero de caso"  class="input-100" >
        <input type="text" name="Proveedor" placeholder="proveedor"  class="input-100" ><br/><br/>
      
        <input type="submit" value="send" class="btn-enviar" >
        <!-- <button type="submit" value="send" class="btn-enviar  " >send</button> -->

 
</form>


    
</body>
</html>

<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:/inventariodos/index.html");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->