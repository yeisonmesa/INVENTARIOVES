<?php 
    include("conexion.php");
    $con=conectar();

    $code_activo=$_GET['code_activo'];

    $sql="SELECT * FROM inventory WHERE code_activo='$code_activo'";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />




    <title>DELETE</title>


<!-- funcion para borrar -->
<script type="text/javascript">
    function confirmDelete()
    {
        var respuesta = confirm("ya retiraste al empleado?");
    
    if (respuesta == true)
     {
        
return true;

    }
    else{
        return false;
    }


    }


</script>

     <!-- funcion para borrar -->



     <!-- funcion para retirar -->
<script type="text/javascript">
    function confirmretirar()
    {

        var respuesta = confirm("estas a punto de retirar al empleado ");
    
    if (respuesta == true)
     {
   
        
return true;

    }
    else{
        return false;
    }


    }


</script>

     <!-- funcion para retirar -->

</head>

<body>

<link rel="stylesheet" href="borra.css">

<H3>Antes de borrar un empleado es importante retirarlo</H3>


<div class="container mt-5">
<form action="borrar.php" method="POST">

<INPUT type="hidden" name="code_activo" value="<?php echo $row['code_activo']?>">
<!-- este input captura el id DEL ATRIBUTO  -->


<span class="material-symbols-outlined">
delete_sweep
</span>
<input type="submit" class="btn btn-danger "  onclick="return confirmDelete()" value= "borrar" > 



</form>


<style type="text/css">
    

    input{
        display:block;
float:left;
padding:0 10px;
margin: 0;
    }


    span{
        display:block;
float:left;
padding:0 10px;
margin: 0;
    }

    a{
        display:block;
float:left;
padding:0 10px;
margin: 0;
    }
    
</style>


<form action="retirar.php" method="POST">

<INPUT type="hidden" name="code_activo" value="<?php echo $row['code_activo']?>">
<!-- este input captura el id DEL ATRIBUTO  -->


<span class="material-symbols-outlined">
logout
</span>
<input type="submit" class="btn btn-danger"  onclick="return confirmretirar()" value= "retirar" > <br/><br/><br/>

<a href="/INVENTARIOdos/inventory.php"    class="btn btn-success">REGRESAR</a>



</form>
<br><br><br>


<!-- <a href="../home/MUESTRA.php"    class="btn btn-success">REGRESAR</a> -->

<!-- <img src="http://escuelaiphone.net/wp-content/uploads/2015/04/borrar-fotos.jpg"   width="600"
     height="500"> -->



</form>
</div>
</body>
</html>