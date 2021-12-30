<?php
include 'partials/head.php';
include '../datos/ConexionA.php';
$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query($con,$consulta);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <h1>Modificar Usuario</h1>
    </ul>
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
      <th scope="col">Usuario</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Privilegio</th>
      <th scope="col">Telefono</th>
      <th scope="col">   </th>
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
      <td><?php echo $tabla['usuario']; ?></td>
      <td><?php echo $tabla['email']; ?></td>
      <td><?php echo $tabla['password']; ?></td>
      <td><?php echo $tabla['privilegio']; ?></td>
      <td><?php echo $tabla['telefono']; ?></td>
      <?php
      echo "<td><a href='mod_user.php?id=".$tabla['id']."'><button class='btn btn-secondary'>Modificar</button></a></td>";
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
<center><a href="Admin.php" class="btn btn-secondary  offset-md-1">Volver</a></center>
</body>

</html>
  
        
