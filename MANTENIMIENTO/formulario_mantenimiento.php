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




    <title>mantenimiento</title>



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

<button><a href="/INVENTARIOdos/MANTENIMIENTO/visualizar_mantenimiento.php" class="btn btn-Light"> <span class="material-symbols-outlined">
table_view
</span>historial de mantenimiento</a></button> 


<!-- 
<form action="../busqueda.php" method="post"  class="form-register">
<input type="submit" value="Buscardor" class="btn-enviar">
</form>



<form action="muestra.php" method="post"  class="form-register">
<input type="submit" value="ver base de datos" class="btn-enviar">
</form> -->

<body>
   

<link rel="stylesheet" href="form_mantenimiento.css">
    <h1>mantenimiento</h1>
    <form action="insertar_form.php" method="POST"  class="form-register">  
       
        <h2 class="form__titulo">INFO MANTENIMIENTO</h2>
        <div class="contenedor-inputs">
        
     

       
        <input type="number" name="code_activo" placeholder="code_activo"  class="input-48" >
        <input type="text" name="nombre" placeholder="nombre_empleado" class="input-100" required>
        <input type="text" name="falla"  placeholder="ingrese falla" class="input-48" required>
        <input type="text" name="team" placeholder="ingrese a que equipo pertenece"  class="input-48" required>
        <input type="text" name="Equipo_owner" placeholder="ingrese serial equipo a tratar"  class="input-100" required>

        <div  class="col">
        <label for="">Dia mantenimiento</label><br>
        <input type="date" name="Dia_mantenimiento" placeholder="dia"  class="form-control" >
        </div>



        <!-- <div class=""></div> 
        <div  class="form-group col-md-4">
        <input type="date" name="date_of_purchase" placeholder="date_of_purchase"  class="input-100" required>
        <label for="">date</label>

        </div> -->

        <input type="text" name="Equipo_borrowed" placeholder="equipo asignado temporalmente"  class="input-100" required>

        <div  class="col">
        <label for="">Dia Entregado</label><br>
        <input type="date" name="Dia_entregado" placeholder="que dia se devolvio"  class="form-control" >
        </div><br><br><br/>


        
    
        <input type="submit" value="send" class="btn-enviar" >
       
      </div>

    </form>

</body>

   











    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>




  </body>
</html>

<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:../index.html");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

