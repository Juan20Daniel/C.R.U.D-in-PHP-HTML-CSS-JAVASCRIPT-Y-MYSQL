<?php include 'partials/head.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	 <link href="estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
	  <form id="loginForm" class="login" action="validarCode.php" method="POST">
       <center><h1 style="font-size: 45px; position: absolute; top:20px; right: 15px; color: gray">Iniciar sesión</h1></center>
        <input type="text" name="txtUsuario" class="texto" id="usuario" autofocus required placeholder="Usuario">
             
        <input type="password" name="txtPassword" class="cont" autofocus required id="password" placeholder="Password">
		
		<button type="submit" class="inicio">Ingresar</button>
		<a href="Registro.php"><input type="button" class="cuenta" value="Crear cuenta"></a>
    </form>
	<?php include 'partials/footer.php';?>
</body>
</html>
		
				