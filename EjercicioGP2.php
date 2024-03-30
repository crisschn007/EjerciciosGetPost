<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <legend>Division de 2 numeros</legend>
    <form action="" method="post">
        <p><input type="text" name="num1" placeholder="Ingrese el primer numero"></p>
        <p><input type="text" name="num2" placeholder="Ingrese el segundo numero"></p>
        <input type="submit" name="submit" value="dividir">

        <?php
        //comprueba si el metodo de solicitud HTTP es POST
         if ($_POST) {

            $num1=$_POST['num1'];
            $num2=$_POST['num2'];

            if ($num2 ==0) {
                echo"Error: No se puede dividir por cero"; 
            } else {
                $division= $num1/$num2;
                echo"El resultado de la division es: ".$division;
            }
            
         }
        ?>
    </form>
</body>
</html>