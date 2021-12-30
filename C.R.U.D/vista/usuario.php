<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:admin.php");
    }else{
    if ($_SESSION["usuario"]["privilegio"] == 3) {
        header("location:empleado.php");
    }
   }
} else {
    header("location:login.php");
}
?>
<?php
include '../datos/ConexionA.php';
$consulta = "SELECT clave,tipo_unidad,presio,cantidad,descripcion,total FROM productos";
$resultado = mysqli_query($con,$consulta);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Usuario</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="cerrar-sesion.php">Cerrar Sesion</a>
      </li>
    </ul>
  </div>
</nav>
    <br>
   <div class="container">
    <div class="row">
        <div class="col-md-12 mt-6">
          <form action="mod.php" method="POST">
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Clave</th>
      <th scope="col">Tipo de Unidad</th>
      <th scope="col">Presio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
   <?php 
  if($resultado){
     while ($tabla = mysqli_fetch_assoc($resultado)) { ?>
  <tbody>
    <tr>
      <td><?php echo $tabla['clave']; ?></td>
      <td><?php echo $tabla['tipo_unidad']; ?></td>
      <td><?php echo $tabla['presio']; ?></td>
      <td><?php echo $tabla['cantidad']; ?></td>
      <td><?php echo $tabla['descripcion']; ?></td>
       <td><?php echo $tabla['total']; ?></td>
    <?php
     }
     ?> 
    </tr>
  </tbody>
</table>

</form>
<?php
  }
 ?>
   
     </div>
  </div>
</div>
</body>
</html>
    