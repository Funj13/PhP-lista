<?php

$valores = [];
for ($i = 0; $i < 6; $i++) {
    echo "Digite o valor ", ($i + 1), ": ";
    $valores[$i] = intval(fgets(STDIN)); // entrada
}

$media = array_sum($valores) / count($valores);

echo "A sequência digitada é: " . implode(" ", $valores) . "\n";

echo "A média dos valores é: " . $media . "\n";

echo "Os valores acima da média são: ";
foreach ($valores as $valor) {
    if ($valor > $media) {
        echo $valor . " ";
    }
}
echo "\n";

?>