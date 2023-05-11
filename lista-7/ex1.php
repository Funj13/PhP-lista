<?php

function imprimir($n, $par, $impar)
{
    if ($n <= 10)
    {
        if ($n % 2 == 0) {
            $par[] = $n;
        } else {
            $impar[] = $n;
        }
        imprimir($n + 1, $par, $impar);
    }
}

$par = array();
$impar = array();

imprimir(1, $impar, $par);

echo "Numeros pares: " +  $par + "\n";
echo "Numeros impares: " +  $impar + "\n";


?>