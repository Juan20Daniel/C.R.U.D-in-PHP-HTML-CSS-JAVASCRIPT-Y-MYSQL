<?php include 'partials/head.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Alta</title>
	<link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
   <center><h1>Alta</h1></center>
  </div>
</nav>
   <div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
	<form action="alta_prod_base.php" method="POST">
  <div class="form-row ">

    <div class="col-md-3 mb-3">
      <label for="validation">Clave</label>
      <input type="text" class="form-control" name="clave" required>
    </div>


    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Tipo de Unudad</label>
      <input type="text" class="form-control" name="t_unidad" required>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Precio</label>
      
        <input type="text" id="n1" name="precio" onkeyup="myFunction()" class="form-control" >
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Descripcion</label>
      <input type="text" class="form-control" name="descrip" required>
    </div>

    <div class="col-md-2 mb-3">
      <label for="validationDefault04">Cantidad</label>
      <input type="text" id="n2" name="cantidad" class="form-control" onkeyup="myFunction()" >
      
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Total</label>
      <input type="text" class="form-control" id="rest" name="total">
  </div>

  <button class="btn btn-primary  offset-md-4" type="submit">Aceptar</button>
  <a href="Admin.php" class="btn btn-secondary  offset-md-1" type="submit">Volver</a>
</form>
  </div>
</div>
</div>
</body>
 <script>
function myFunction() {
  var input = document.getElementById("n1").value;
  var table = document.getElementById("n2").value;
  var resultado = parseInt(input) * parseInt(table);

  if(table == "" || input == ""){
    rest.value = input;
  }else{
  rest.value = resultado;
   }
}
</script>
</html>
	