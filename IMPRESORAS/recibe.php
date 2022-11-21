
<?php
  include "conexion.php";
 

  
  $id=$_POST['id'];
  $toner_color=$_POST['toner_color'];
  $fecha_cambio=$_POST['fecha_cambio'];
  $id_impresora=$_POST['id_impresora'];
  

  
  
  $sql ="INSERT INTO tintas VALUES ('$id','$toner_color','$fecha_cambio','$id_impresora') ";
  $query=mysqli_query($conexion,$sql);
  
  
  
  
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

?>