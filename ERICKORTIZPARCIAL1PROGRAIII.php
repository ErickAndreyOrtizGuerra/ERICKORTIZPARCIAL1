EJERCICIO1--------------------------------------------------------------------------------------------------------
<?php
// Ciclo for iniciando en 0
for ($i = 0; $i <= 30; $i += 3) {
    if ($i % 2 != 0) {
        continue;
    }
}

echo "el primer impar despues de 30: $i";
?>

EJERCICIO2--------------------------------------------------------------------------------------------------------

<?php
$a = 0; // variable para guardar la suma de los impares
$b = 0; // variable para guardar la suma de los pares
$num = 0; // variable para iterar a través de los números

while ($num <= 50) {
    if ($num % 2 == 0) {
        // Si el numero es par, se va a sumar a la variable b
        $b += $num;
    } else {
        // Si el numero es impar, se suma a la variable a
        $a += $num;
    }
    $num++; 
}
echo "La suma de los impares: " . $a . "\n";
echo "La suma de los pares: " . $b;
?>
----------------------------------------------------------------------------------------------------------------