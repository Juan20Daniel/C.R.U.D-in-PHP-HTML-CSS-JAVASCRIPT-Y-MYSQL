<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:usuario.php");
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
$consulta = "SELECT * FROM productos";
$resultado = mysqli_query($con,$consulta);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="navbar.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="alta_prod.php">Alta de producto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Modificar_user.php">Modificar Usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cerrar-sesion.php">Cerrar Sesion</a>
      </li>
    </ul>
  
    <form action="buscar.php" method="POST">
    <input type="text" name="buscar" placeholder="Descripcion">
     <input type="submit" id="Enviar" value="buscar">
   </form>
  </div>
</nav>
   <br><br>
	<div class="container">
    <div class="row">
       <div class="col-md-12">

 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Clave</th>
      <th scope="col">Tipo de Unidad</th>
      <th scope="col">Presio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Descripcion</th>
      <th scope="col">total</th>
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
      <td><?php echo $tabla['tipo_unidad']; ?></td>
      <td><?php echo $tabla['presio']; ?></td>
      <td><?php echo $tabla['cantidad']; ?></td>
      <td><?php echo $tabla['descripcion']; ?></td>
      <td><?php echo $tabla['total']; ?></td>
      <th><form method="POST" action="eliminar.php" id="miFormulario">
      <input type="hidden" value="<?php echo $tabla['clave']; ?>" name="clave">
      <button  type="submit" class="btn btn-secondary">Eliminar</button>
      </form></th>
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
<script type="text/javascript">
       (function() {
         var form = document.getElementById('miFormulario');
         form.addEventListener('submit', function(event) {
           // si es false entonces que no haga el submit
           if (!confirm('Desea eliminar este rejistro?')) {
             event.preventDefault();
           }
         }, false);
       })();
     </script>
</body>

</html>
	
				
