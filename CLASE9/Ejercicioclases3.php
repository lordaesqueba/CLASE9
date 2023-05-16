<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch de colores</title>      
</head>
    <body>
    <h2>Switch de colores</h2>
       <form action="Ejercicioclases3.php" method="POST">
        <button name="color" value="Rojo">Rojo</button>
        <button name="color" value="Azul">Azul</button>
        <button name="color" value="Verde">Verde</button>
        <button name="color" value="Amarillo">Amarillo</button>
        <button name="color" value="Naranja">Naranja</button>
    </form>
    <br>
<?php
 if (isset($_POST['color'])) {
    $color = $_POST['color'];
    echo "El color seleccionado es: <span style='color: $color;'>$color</span>";
    }
?>


    </head>    
    </html>