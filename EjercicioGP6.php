<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <fieldset>
    <legend>GameRoom</legend>
    <form action="" method="post">
        <p>Ingrese su edad: <input type="text" name="edad" placeholder="Ej. 19"></p>
        <button type="submit">Calcular Precio</button>

        <?php
       
     if ($_POST) {  
        #obtener la edad desde el formulario del cliente
        $edad=$_POST['edad'] ;

        if ($edad<4) {
            $precio=0;
        }elseif ($edad>=4 && $edad <=18) {
            $precio=5;
        }else {
            $precio=10;
        }
        echo"<h2> El precio de la entrada es: Q".$precio."</h2>";
     }
        ?>
        
    </form>
    </fieldset>
</body>
</html>