

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
  <h2>Tabla de multiplicación</h2>

  <form method="POST">
    <label for="valor">Ingrese un número:</label>
    <input type="number" id="valor" name="valor" required>
    <input type="submit" value="Generar tabla">
  </form> 
  <?php
if(isset($_POST['valor'])) {
 $valor = $_POST['valor'];

  echo "<h3>Tabla de multiplicación del $valor:</h3>";
  echo "<table border='1'>";
  for ($i = 1; $i <= 10; $i++) {
      $resultado = $valor * $i;
      echo "<tr><td>$valor x $i</td><td>=</td><td>$resultado</td></tr>";
  }
    echo "</table>";
  }
  ?>
</body>
</html>
    






