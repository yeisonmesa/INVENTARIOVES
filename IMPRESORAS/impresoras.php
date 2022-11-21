
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 
error_reporting(0);
session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>impresoras</title>
  </head>

<style>

  h1{
    text-align: center;
    border: brown;
  }
</style>

  <body>
  <a href="../LOGIN/pagina_segura.php"  class="btn btn-primary">regresar</a><br>
    <h1 >impresoras</h1>

   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<div class="container">

<a href="" class="btn btn-dark">agregar</a>

<a href="tintas.php" class="btn btn-dark">tintas</a>

<hr>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">serial</th>
      <th scope="col">cambios</th>
      <th scope="col">impresora</th>
      <th>toners</th>


      <th>edit</th>
      <th>delete</th>
    </tr>
  </thead>
  <tbody>

  <?php
  include "conexion.php";

  $sql ="SELECT * FROM impresora";
  $resultado = $conexion->query($sql);

  while ($fila = $resultado->fetch_assoc()) { ?>
    
  




    <tr>
      <th><?php echo $fila['id']?></th>
      <td><?php echo $fila['nombre'] ?></td>
      <td><?php echo $fila['serial'] ?></td>
      <td><?php echo $fila['cambios'] ?></td>
      <td><img   style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen'])?>"  alt="">    </td>
      <td><?php echo $fila['tintas'] ?></td>


      <th> <a href="modificar.php? id=<?php echo $row['id']; ?>">modificar</a></th>
      <th> <a href="eliminar.php? id=<?php echo $row['id']; ?>">modificar</a></th>

    </tr>
    
    
  </tbody>

  <?php } ?>
</table>



</div>

  </body>
</html>

<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:/inventariodos/index.html");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->
