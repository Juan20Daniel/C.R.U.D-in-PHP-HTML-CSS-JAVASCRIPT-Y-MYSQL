<?php
include '../datos/ConexionA.php';

$consulta = "INSERT INTO productos VALUES(null,'".$_POST['clave']."','".$_POST['t_unidad']."','".$_POST['precio']."','".$_POST['cantidad']."','".$_POST['descrip']."','".$_POST['total']."');";
$resultado = mysqli_query($con,$consulta);

 if($resultado){ ?>

 	<script type="text/javascript">
 		if(confirm('INSERTADO')){
 			location.href = 'Alta_prod.php';
 		}
 	</script>
 <?php
 }
?>