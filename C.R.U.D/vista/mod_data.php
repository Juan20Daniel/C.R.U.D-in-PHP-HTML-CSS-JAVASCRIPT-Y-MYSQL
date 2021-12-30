<?php

 $id = $_POST['id'];
 $clave = $_POST['clave'];
 $usuario = $_POST['usuario'];
 $email= $_POST['email'];
 $password = $_POST['password'];
 $privilegio = $_POST['privilegio'];
 $telefono = $_POST['telefono'];

$conexion=mysqli_connect("localhost","root","","bd_login");
 $consulta = "UPDATE usuarios SET clave = '".$clave."',usuario = '".$usuario."',email = '".$email."',password = '".$password."',privilegio = '".$privilegio."',telefono = '".$telefono."' WHERE id = '".$id."'";

 $resultado = mysqli_query($conexion,$consulta);

 header('location:Modificar_user.php');
 ?>
