<?php
function bonjour($jour) {
    if ($jour === true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Test
bonjour(true);
echo "<br>";
bonjour(false);
?>
