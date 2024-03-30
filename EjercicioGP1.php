<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h2>Autenticacion de contraseña</h2>
    <form action="" method="post">
        
        <p><input type="password" name="pass" placeholder="Ingrese contraseña"></p>
        <input type="submit" name="submit" value="ingresar">

        <?php
        //comprueba si el metodo de solicitud HTTP es POST
         if ($_POST) {

            $pass=$_POST['pass'];
            $passwrd="Admin123";

            if ($pass == "Admin123") {
                echo"Bienvenido al sistema !!!"; 
            } else {
                
                echo"Error!!! Ingrese bien sus datos ";
            }
            
         }
        ?>
    </form>
</body>
</html>