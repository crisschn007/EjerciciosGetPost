<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h2>ISR</h2>
    <form action="" method="post">
    <p>Ingrese Su valor de renta: Q<input type="text" name="renta"></p>
    <input type="submit" value="Consultar"><br>
    
<?php
if ($_POST) {
    $valor = $_POST['renta'];

    if ($valor < 1000) {
      echo"Usted debe pagar el 5% del impositivo";
    }elseif ($valor<=1000 && $valor>=2000) {
        echo"Usted debe pagar el 15% del impositivo";
    }elseif ($valor>2000 && $valor <=3500) {
        echo"Usted debe pagar el 20% del impositivo";
    }elseif ($valor>3500 && $valor <=6000) {
        echo"Usted debe pagar el 30% del impositivo";
    }else {
        echo"Usted debe pagar el 45% del impositivo";
    }
}
?>

    </form>
</body>
</html>