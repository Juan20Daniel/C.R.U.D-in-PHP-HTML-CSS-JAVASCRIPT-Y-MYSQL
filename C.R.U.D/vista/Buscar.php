<?php include 'partials/head.php';?>
<?php
    $busca = $_POST['buscar'];

    $conexion=mysqli_connect("localhost","root","","bd_login");
    $consulta = "SELECT * FROM productos WHERE descripcion like '".$busca."'";
    $respuesta =mysqli_query($conexion,$consulta);      
    ?>
    <html>
<head>
  <title>Buscar</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="navbar.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <h1>Buscar</h1>
    </ul>
  </div>
</nav>

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
      <th scope="col">total</th>
    </tr>
  </thead>

   <?php          
    if($respuesta){
      while ($table = mysqli_fetch_assoc($respuesta)){ ?>
             <tr>

      <td><?php echo $table['id']; ?></td>
      <td><?php echo $table['clave']; ?></td>
      <td><?php echo $table['tipo_unidad']; ?></td>
      <td><?php echo $table['presio']; ?></td>
      <td><?php echo $table['cantidad']; ?></td>
      <td><?php echo $table['descripcion']; ?></td>
      <td><?php echo $table['total']; ?></td>
            <?php
             }
            ?>
        </table>
    <?php
    }
?>
	</div>
</div>
</div>
<center><a href='admin.php'><button>Volver</button></a></center>
</body>

</html>
  