
<?php
include 'partials/head.php';
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Alta</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <h1>Modificar Usuario</h1>
    </ul>
  </div>
</nav>
    
    <div class="container">
    <div class="row">
        <div class="col-md-10 mt-6">

 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col">Clave</th>
      <th scope="col">Usuario</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Privilegio</th>
      <th scope="col">Telefono</th> 
      <th scope="col"></th> 
    </tr>
  </thead>
    <tr>
      <form action="mod_data.php" method="POST">
      <td><input type="hidden" name="id" value="<?php echo($id) ?>"></td>
      <td><input style="width: 80px;" type="text" name="clave" ></td>
      <td><input style="width: 100px;" type="text" name="usuario" ></td>
      <td><input type="text" name="email" ></td>
      <td><input type="text" name="password" ></td>
      <td><input style="width: 50px;" type="text" name="privilegio" ></td>
      <td><input type="text" name="telefono" ></td>
      <th><input type="submit" class="btn btn-secondary" value="Modificar"></th>
    </form>
      
    <br><br>
    </tr>
</table>
   
   </div>
</div>
</div>
</body>

</html>
  
        
