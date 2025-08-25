<?php
function occurrences($str, $char) {
    $count = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] == $char) {
            $count++;
        }
    }
    return $count;
}

// Exemple
echo occurrences("Bonjour", "o");
?>
