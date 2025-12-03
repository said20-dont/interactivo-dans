<!DOCTYPE html>
<html>
    <head>
    <title>Concatenar variables en PHP</title>
    </head>
    <body>
        <?php
            $conexion= mysqli_connect("sql100.infinityfree.com","if0_40591075 ","OAQBzmTQ48K56b","if0_40591075_XXX");
            if(!$conexion){
                echo "Error:no se pudo conectar a MySQL";
                echo "errno de depuración: " . mysqli_connect_errno();
                echo "error de depuración: " . mysqli_connect_error();
                exit;
            }
            echo "Conexión exitosa con MySQL";
            echo "<br>";
            echo "Información del host: " . mysqli_get_host_info($conexion);
            mysqli_close($conexion);
        ?>
    </body>
</html>