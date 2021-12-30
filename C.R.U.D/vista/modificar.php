<?php
include 'partials/head.php';
include '../datos/ConexionA.php';
$consulta = "SELECT * FROM productos";
$resultado = mysqli_query($con,$consulta);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="navbar.css">
</head>
<body>
	
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <h1 style="font-size: 27px;">Modificar</h1>
  </div>
</nav>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-6">
	      <table class="table">
           <thead class="thead-dark">
            <tr>
              <th scope="col"></th>
              <th scope="col">Clave</th>
              <th scope="col">Tipo de Unidad</th>
              <th scope="col">Presio</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Total </th>
              <th scope="col"> </th>
            </tr>
           </thead>
           <?php   
             if($resultado){
               while ($tabla = mysqli_fetch_assoc($resultado)) { ?>
                 <tbody>
                   <tr>
                    <form action="mod.php" method="POST">
                      <td><input type="hidden" name="id" value="<?php echo $tabla['id']; ?>"></td>
                      <td><input type="text" name="clave" value="<?php echo $tabla['clave']; ?>" ></td>
                      <td><?php echo $tabla['tipo_unidad']; ?></td>
                      <td><?php echo $tabla['presio']; ?></td>
                      <td><input type="text" name="cantidad" value="<?php echo $tabla['cantidad']; ?>"></td>
                      <td><?php echo $tabla['descripcion']; ?></td>
                      <td><?php echo $tabla['total']; ?></td>
                        <th>
                        <button  type="submit" class="btn btn-secondary">Modificar</button>
                      </form>
                       </th>
                <?php
                }
                ?> 
                   </tr>
                </tbody>
          </table>
            <?php
              }
              ?>
        </form>
    </div>
  </div>
</div>
<center><a href="Admin.php" class="btn btn-secondary  offset-md-1">Volver</a></center>
</body>
</html>
  
        