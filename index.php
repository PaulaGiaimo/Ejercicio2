<?PHP 

echo "Hola Mundo 2";

/*1) constuctor
2) [0]
3) push
para mostrar utilizo var_dump

Aplicación Nº 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand ). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.

*/

$miArray= array();
$suma=0;
for ($i=0;$i<5;$i++){
    $miArray[$i]=rand(0,100);
    $suma=$i;
}

if (($suma/5)<6){
    echo "El promedio de los números es ".$suma/6."por lo que es menor a 6";
    else
     echo "El promedio de los números es ".$suma/6."por lo que es mayor a 6";
}
var_dump($miArray);
?>