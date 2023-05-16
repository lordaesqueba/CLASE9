<?php 

if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacion'])) {
  $numero1 = $_POST['numero1'];
  $numero2 = $_POST['numero2'];
  $operacion = $_POST['operacion'];
  
  switch ($operacion) {
    case "suma":
      $resultado = $numero1 + $numero2;
      break;
    case "resta":
      $resultado = $numero1 - $numero2;
      break;
    case "multiplicacion":
      $resultado = $numero1 * $numero2;
      break;
    case "division":
      if ($numero2 != 0) {
        $resultado = $numero1 / $numero2;
      } else {
        $resultado = "Error: no se puede dividir entre cero";
      }
      break;
    default:
      $resultado = "Error: operación no válida";
      break;
  }
  
  echo "El resultado de la operación es: " . $resultado;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicioclase</title>
</head>
<body>
    <h2>Operacion Aritmetica</h2>

  <form action="Ejercicioclases.php" method="post">
    <label for="numero1">Número 1:</label>
    <input type="number" id="numero1" name="numero1"><br>

    <label for="numero2">Número 2:</label>
    <input type="number" id="numero2" name="numero2"><br>

    <label for="operacion">Operación:</label>
    <select id="operacion" name="operacion">
      <option value="suma">Suma</option>
      <option value="resta">Resta</option>
      <option value="multiplicacion">Multiplicación</option>
      <option value="division">División</option>
    </select><br>

    <input type="submit" value="Calcular">
</form>

</body>
</html>