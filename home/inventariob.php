<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

session_start();
if (isset($_SESSION["usuario"])) {
?>


<!-- ----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->



<?php 
    // include("conexion.php");
    // $con=conectar();

    // $sql="SELECT *  FROM  inventory";
    // $query=mysqli_query($con,$sql);

    // $row=mysqli_fetch_array($query);
    
?>
<!-- ?php 
// date_default_timezone_set("America/Bogota");? -->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />




    <title>inventary</title>



    </head>
<!-- <form action="../INDEX.HTML" method="post"  class="form-register">
<input type="submit" value="home" class="btn-enviar">
</form> -->

<button><a href="/INVENTARIOdos/LOGIN/pagina_segura.php" class="btn btn-Light">  <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48">home</span>  HOME</a></button> 


<!-- <button><a href="../busqueda.php" class="btn btn-success">buscador</a></button>  -->

<button><a href="/INVENTARIOdos/inventory.php" class="btn btn-Light"> <span class="material-symbols-outlined">
table_view
</span>VER base de datos</a></button> 


<!-- 
<form action="../busqueda.php" method="post"  class="form-register">
<input type="submit" value="Buscardor" class="btn-enviar">
</form>



<form action="muestra.php" method="post"  class="form-register">
<input type="submit" value="ver base de datos" class="btn-enviar">
</form> -->

<body>
   

<link rel="stylesheet" href="/INVENTARIOdos/style/inventario.css">
    <h1>inventary </h1>
    <form action="recibe.php" method="post"  class="form-register">  
       
        <h2 class="form__titulo">ingrese datos del inventario</h2>
        <div class="contenedor-inputs">
        
     

       
        <!-- <input type="number" name="code_activo" placeholder="code_activo"  class="input-48" > -->
        <input type="text" name="NOMBRE" placeholder="nombre_empleado" class="input-100" required>
        <input type="text" name="POSITION"  placeholder="position" class="input-48" required>
        <input type="text" name="Deparment" placeholder="deparment"  class="input-48" required>
        <input type="text" name="COMPUTER" placeholder="COMPUTER"  class="input-100" required>

        <!-- <div class=""></div> 
        <div  class="form-group col-md-4">
        <input type="date" name="date_of_purchase" placeholder="date_of_purchase"  class="input-100" required>
        <label for="">date</label>

        </div> -->

        


        <input type="text" name="MARCA" placeholder="marca laptop"  class="input-100" required>
        <input type="text" name="MODELO_REFERENCIA" placeholder="modelo_referencia"  class="input-100" required>
        <input type="text" name="SERIALES" placeholder="seriales"  class="input-100" required>
        <input type="text" name="PROCESSOR" placeholder="processor"  class="input-100" required>
        <input type="email" name="Email" placeholder="email"  class="input-100" required>
        <input type="text" name="CONTRASEÑA" placeholder="contraseña"  class="input-100" required>
        <input type="text" name="PIN" placeholder="pin laptop"  class="input-100" required>
        <input type="text" name="NOMBRE_EQUIPO" placeholder="nombre equipo"  class="input-100" required>
        <input type="text" name="comment" placeholder="coment"  class="input-100" >
        <input type="text" name="CAMBIO" placeholder="cambio laptop"  class="input-100" required>
        <input type="text" name="RAM" placeholder="ram"  class="input-100" required>
        <input type="text" name="HARD_DRIVE" placeholder="hard_drive"  class="input-100" required>
        <input type="text" name="SERIAL_CARGADOR" placeholder="serial cargador"  class="input-100" required>
        <input type="text" name="NUMERO_PARTE_CARGADOR" placeholder="numero parte cargador"  class="input-100" require>
        <input type="text" name="PROVEEDOR" placeholder="proveedor"  class="form-control" >
        <!-- <input type="DATE" name="FECHA_COMPRA" placeholder="fecha compra"  class="input-100" required> -->

        <div  class="col">
        <label for="">fecha compra</label><br>
        <input type="date" name="FECHA_COMPRA" placeholder="FECHA COMPRA"  class="form-control" >
        </div>
        

         
    <input type="number" name="COSTO_EQUIPO" placeholder="precio de laptop"  class="form-control" >

            
        

        <input type="submit" value="send" class="btn-enviar" >
       
      </div>

    </form>

</body>

   











    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



    <a href="../import/LEER.PHP">cargar base de datos</a>
  </body>
</html>

<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:../index.html");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

