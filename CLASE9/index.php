<?php /*etiqueta de inicio para PHP*/

//variable con tipo de dato
$variable = 10; //creacion de variable indicando el valor con tipo (INTERGER)

$Nombre = 'Juan Pablo'; // variable con tipo de valor String
$Edad = 20;//variable con tipo de valor Int
$altura = 1.70; //variable con tipo de valor Float

// Imprimir informacion de la variables

echo '<h1>Hola desde PHP</h1>';
echo '<br>';
echo 'Mi nombre es; '.$Nombre.', mi edad '.$Edad.' años y mi estatura es:'.$altura;
echo '<br>';

//constantes
DEFINE('NOMBRE','JUAN CARLOS');
echo '<br>';

//ejemplo de print
print('ejemplo print');
echo'<br>';
print_r('ejemplo de print');
echo'<br>';
var_dump($Nombre);
echo'<br>';
var_dump($Edad);
//SWITCH
$i =1;
switch ($i) {
    case 0:
        echo'Sleccionaste el valor 0';
        break;
    case 1:
        echo'Sleccionaste el valor 1';
        break;    
    
    default:
        echo'Sin Seleccion';
        break;
}


//echo NOMBRE;

?>

