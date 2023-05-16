<?php 
if ($_POST){
//generar calculos
//creamos la s variables de recuperacion del formulario

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
//CALCULAR EL VALOR INGRESADO
$total =$valor1+$valor2;
echo $total;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>

    <form action="Ejercicios.php" method='post'>
        <input type="text" name='valor1'>
        <br>
        <input type="text" name='valor2'>
        <br>
        <input type="submit" value='Calcular'>
        <br>
        
    </form>
</body>
</html>