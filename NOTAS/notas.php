<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ves_asset";

$con = new mysqli($host,$user,$pass,$db);

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>visualizar apuntes</title>


    <style>

table{
  table-layout: fixed;  
  width:min-content;
}

 th,th {
    /* 
   
    */

    word-wrap: break-word;
    position:static; 
   width:300;
    overflow:"auto";
	   
}



th, td {
  WIDTH:50;
	    HEIGHT:50;
      width: 48%;
    padding: 15px;
}


    </style>


  </head>
  <body>
   <h4>notepad</h4>

    <a href="/INVENTARIOdos/inventory.php">return</a>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <table border="1" class="table table-sm" >
<thead>
<tr style="background:#337ab7; color:WHITE;"  class="table-primary">
    

<th  scope="col">code_activo</th>
<Th>comment</Th>
<th></th>
   
</tr>
</thead>
<tbody>





<?php

$consulta=$con->query("SELECT * FROM comentarios");



while($row=$consulta->fetch_array()){


?>

<!-- tiene un error hay que fijarse en la correspondencia de la columnas -->


<tr class="table table-striped"  style="background:white; color:black;">






<td style="width: 70px;"><?php echo $row['code_activo'] ?></td>

<td style="width: 70px;"><?php echo $row['comment'] ?></td>

<td ><a href="actualizar_notas.php ? id=<?php echo $row['id'] ?>" class="btn btn-success" >   <span class="material-symbols-outlined" style="
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48   ,
 ">edit_square</span>   </a></td>




</tr>




<?php
}

?>


</tbody>
</table>






  </body>
</html>