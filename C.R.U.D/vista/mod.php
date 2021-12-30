<?php

 $id = $_POST['id'];
 $clave = $_POST['clave'];
 $cantidad = $_POST['cantidad'];
 
$con=mysqli_connect("localhost","root","","bd_login");
 $consulta = "UPDATE productos SET clave = ".$clave.",cantidad = ".$cantidad." WHERE id = ".$id."";
 $resultado = mysqli_query($con,$consulta);
 header('location:admin.php');
 ?>
