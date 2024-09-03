<?php
function isFibonacci($num) {
    $a = 0;
    $b = 1;
    
    if ($num == $a || $num == $b) {
        return true;
    }

    while ($b < $num) {
        $temp = $b;
        $b = $a + $b;
        $a = $temp;
    }

    return $b == $num;
}

$numero = 21; // Substitua por qualquer número desejado

if (isFibonacci($numero)) {
    echo $numero . " pertence à sequência de Fibonacci.";
} else {
    echo $numero . " não pertence à sequência de Fibonacci.";
}
?>