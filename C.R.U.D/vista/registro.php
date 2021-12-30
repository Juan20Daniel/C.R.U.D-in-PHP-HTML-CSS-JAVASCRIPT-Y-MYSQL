<html>
<head>
 <title>Registro</title>
 <link href="estilosC.css" rel="stylesheet" type="text/css">
 </head>
 <body>
  
		<form action="registroCode.php" class="cuenta" method="POST">
		 <center><h1 style="font-size: 45px; color: gray;">Crear cuenta</h1></center>				
		    <input type="text" name="txtNombre" class="texto1" id="nombre" autofocus required placeholder="Clave">
			<input type="email" name="txtEmail" class="texto2" id="email"  required placeholder="Ingresa tu dirección de e-mail">
		    <input type="text" name="txtUsuario" class="texto3" id="usuario" autofocus required placeholder="usuario">
			<input type="password" name="txtPassword" class="texto4" required id="password" placeholder="Password">
			<input type="text"  class="texto5" name="txtTelefono" id="telefono"placeholder="Tel&eacute;fono">
			<button type="submit" class="texto6" >Registrar</button>
						</form>
					
<?php include 'partials/footer.php';?>
</body>
</html>