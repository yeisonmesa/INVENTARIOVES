


<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 
error_reporting(0);
session_start();
if (isset($_SESSION["usuario"])) {
   



?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->





<style>

form{

	width:600px;
	padding:16px;
	margin:auto;
	background-color:#ccc;
}

body{

background-color: gray;

}

form label{
  
	width:72px;
	font-weight:bold;
	display:inline-block;

}

form input[type="text"],
form input[type="number"]{
	width:180px;
	padding:3px 10px;
	border:1px solid #f6f6f6;
	border-radius:3px;
	background-color:#f6f6f6;
	margin:8px 0;
	display:inline-block;
}

form input[type="submit"]{
	width:100%;
	padding:8px 16px;
	margin-top:32px;
	border:1px solid #000;
	border-radius:5px;
	display:block;
	color:#fff;
	background-color:#000;
} 

form input[type="submit"]:hover{
	cursor:pointer;
}

/* label{
  margin: auto;
  padding: 8px 16px;

  width:30px;
} */

select.toner{
  margin: 20px;
  padding: 8px 16px;

  width:300px;
}



</style>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingrese informacion al formulario</title>
</head>
<body>

<form action="recibe.php" method="POST">

<div class="toner_color"><br>
<label for="">color</label>
<input type="text" name="toner_color" class="toner" required>
</div>




<div class="fecha_cambio">
<label for="">fecha</label>
<input type="date" name="fecha_cambio" class="toner">
</div>

<!-- <div class="ID_IMPRESORA">
<label for="">id_impresora</label>
<input type="number" name="id_impresora" class="toner">
</div> -->




  <!-- EL SIGUIENTE AYUDA A SELECIONAR LA IMPRESORA  ALA QUE LE CORRESPONDE EL CAMBIO  -->


<!-- segundo select  -->

<label >impresora</label>


<select class="toner" name="id_impresora" type="number" >
  <option selected>seleccione impresora</option>
  <option value="1">1 --> Color laser jet Pro MFP M281fdw </option>
  <option value="2">2 --> HP Smart Tank 530 </option>
  <option value="3">3 --> HP Deskjet Ink Advantage 3775 PRINT SCAN COPY WEB</option>

</select> 

<input type="submit"  value="enviar">




</form>





    
</body>
</html>


<!-- 

  include "conexion.php";
 

  
  // $id=$_GET['id'];
  $toner_color=$_GET['toner_color'];
  $fecha_cambio=$_GET['fecha_cambio'];
  $id_impresora=$_GET['id_impresora'];
  

  
  
  $sql ="INSERT INTO tintas VALUES ('$toner_color','$fecha_cambio','$id_impresora') ";
  $query=mysqli_query($con,$sql);
  
  
  
  
  if ($query) {
      echo "<script language='JavaScript'>
      alert('informacion ingresada correctamente');
      location.assign('index.php');
      </script>";
  
  }else {
      echo "<script language='JavaScript'>
      alert('error al insertar datos fijese en ingresar informacion correspondiente');
      </script>";
      
  
  }

-----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->

<?php 

}else {
   
    header("location:/inventariodos/index.html");

}

?>
<!-- -----ESTE CODIGO AYUDA A EVITAR QUE LA SESSION SIGA ABIERTA AUNQUE ESTE SE CIERRE------- -->
