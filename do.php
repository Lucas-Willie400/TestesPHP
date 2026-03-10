<?php

$n = -5;
do {
    echo $n;
    $n++;
} while ($n <= 0);

$nome = "Julia";

switch ($nome) {
    case "Ketily":
        echo "É ficha";
        break;
    case "Júlia":
        echo "Não acredito";
        break;
    default:
        echo "Ah, num pode ser!";
        break;
}

?>