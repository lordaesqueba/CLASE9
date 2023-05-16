<?php
if(isset($_POST['submit'])) {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    if($valor1 > $valor2) {
        $resultado = "El valor $valor1 es mayor que $valor2.";
    } 
    elseif($valor1 < $valor2) {
        $resultado = "El valor $valor1 es menor que $valor2.";
    } 
    else {
        $resultado = "Ambos valores son iguales.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Ejercicioclases2.php</title>
</head>
<body>
    <h2>Mayor o menor</h2>

    <form action="Ejercicioclases2.php" method="POST">
        <label for="valor1">Valor 1:</label>
        <input type="number" id="valor1" name="valor1" required><br><br>

        <label for="valor2">Valor 2:</label>
        <input type="number" id="valor2" name="valor2" required><br><br>

        <input type="submit" name="submit" value="Comparar">
    </form>

    <?php if(isset($resultado)): ?>
        <p><?php echo $resultado; ?></p>
    <?php endif; ?>
</body>
</html>
