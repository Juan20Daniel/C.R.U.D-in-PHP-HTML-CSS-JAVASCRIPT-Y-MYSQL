<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:admin.php");
    }else{
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:usuario.php");
      }
    }
} else {
    header("location:login.php");
}
?>
<?php
include '../datos/ConexionA.php';
$consulta = "SELECT * FROM productos";
$resultado = mysqli_query($con,$consulta);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Empleado</title>
    <link rel="stylesheet" href="navbar.css">
</head>

<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="alta_prod.php">Alta de Producto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cerrar-sesion.php">Cerrar Sesion</a>
      </li>
    </ul>
    <form action="buscar.php" method="POST">
    <input type="text" name="buscar">
     <input type="submit" id="Enviar" value="Buscar">
   </form>
  </div>
</nav> 
 <br>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Clave</th>
      <th scope="col">Tipo de Unidad</th>
      <th scope="col">Presio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Descripcion</th>
      <th scope="col">   </th>
    </tr>
  </thead>
   <?php 
  if($resultado){
     while ($tabla = mysqli_fetch_assoc($resultado)) { ?>
  <tbody>
    <tr>
      <td><?php echo $tabla['id']; ?></td>
      <td><?php echo $tabla['clave']; ?></td>
      <td><?php echo $tabla['tipo_unidad']; ?></td>
      <td><?php echo $tabla['presio']; ?></td>
      <td><?php echo $tabla['cantidad']; ?></td>
      <td><?php echo $tabla['descripcion']; ?></td>
      <?php
      echo "<td><a href='modificar.php?id=".$tabla['id']."'><button class='btn btn-secondary'>Modificar</button></a></td>";
     ?>
    <?php
     }
     ?> 
    </tr>
  </tbody>
</table>
<?php
  }
 ?>
   
   </div>
</div>
</div>
<?php/// include('partials/footer.php')?>
</body>
</html>
    
                