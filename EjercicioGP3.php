<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="" method="post">
    <h2>Consultas de tributariado</h2>
    <p>Ingrese su edad: <input type="text" name="edad" placeholder="Ej. 16"></p>
    <p>Ingrese su salario:  Q<input type="text" name="sal" ></p>
    <input type="submit" value="Consultar">

    <?php
    if ($_POST) {
        $edad=$_POST['edad'];
        $sal=$_POST['sal'];

        if ($edad>16  && $sal>=1000) {
            echo"Estimado Usuario, usted tiene que tributar";
        } else {
            echo"Estimado Usuario, usted no tiene que tributar";
        }
        
    }
    ?>

    </form>
</body>
</html>