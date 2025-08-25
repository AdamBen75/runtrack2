<?php
function calcule($a, $operation, $b) {
    if ($operation == "+") {
        return $a + $b;
    } elseif ($operation == "-") {
        return $a - $b;
    } elseif ($operation == "*") {
        return $a * $b;
    } elseif ($operation == "/") {
        return $b != 0 ? $a / $b : "Erreur : division par zéro";
    } elseif ($operation == "%") {
        return $b != 0 ? $a % $b : "Erreur : modulo par zéro";
    }
}

echo calcule(10, "+", 5);
?>
