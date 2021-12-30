<?php
    $clave=$_POST['clave'];

    include '../datos/ConexionA.php';
    $consulta ="DELETE FROM productos WHERE clave='".$clave."'";
    $resultado= mysqli_query($con,$consulta);


if ($resultado) {

           echo       
             '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Aeroasistencia/Administracion/edicionCliente.php">
            <script>
                alert("El cliente NO  fue eliminado EXITOSAMENTE");
            </script>';

        }else{

            echo        
            '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Aeroasistencia/Administracion/edicionCliente.php">
            <script>
                 alert("El cliente fue eliminada EXITOSAMENTE");
            </script>';

        }

 	    header('location:admin.php');
    


?>


    