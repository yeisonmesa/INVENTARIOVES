
<?php 


// este codigo  error_reporting(0);  ayuda a quitar errores no nesesarios
//  error_reporting(0);
session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->








<?php 

$conexion =mysqli_connect('localhost','root','','ves_asset');

// require("inventariob.php");
// NO ACTIVAR ESTOS PUEDE GENERAR ERROR

// include("inventariob.php");
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  

  </head>
  <body>


    <h1>INVENTARY</h1>



    <body>





<br>

<table border="2">
<tr>
<td>code_activo</td>

    <td>NOMBRE</td>
    <TD>POSITION</TD>
    
    <td>COMPUTER</td>
    <TD>MARCA</TD>
    <td>MODELO_REFERENCIA</td>
    <TD>SERIALES</TD>
   
    <td>Email</td>
  
    
    <td>NOMBRE_EQUIPO</td>
  
  
   


  
    

</tr>

<?php

$sql="SELECT code_activo,NOMBRE,POSITION,COMPUTER,MARCA,MODELO_REFERENCIA,SERIALES,Email,NOMBRE_EQUIPO from inventory";
$result =mysqli_query($conexion,$sql);


while($mostrar=mysqli_fetch_array($result)){
?>

<!-- tiene un error hay que fijarse en la correspondencia de la columnas -->


<tr>

<td><?php echo $mostrar['code_activo'] ?></td>
<td><?php echo $mostrar['NOMBRE'] ?></td>
<td><?php echo $mostrar['POSITION'] ?></td>

<td><?php echo $mostrar['COMPUTER'] ?></td>
<td><?php echo $mostrar['MARCA'] ?></td>
<td><?php echo $mostrar['MODELO_REFERENCIA'] ?></td>
<td><?php echo $mostrar['SERIALES'] ?></td>

<td><?php echo $mostrar['Email'] ?></td>

<td><?php echo $mostrar['NOMBRE_EQUIPO'] ?></td>

 


<?php
}

?>


</table>


    
</body>





    
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
