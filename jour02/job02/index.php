<?php
for ($i = 0; $i < 1138; $i++) {

    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111) {
        continue;
    }

    if ($i == 42) {
        echo "<span style='font-weight:bold;'>$i</span><br />";
    } else {
        echo $i . "<br />";
    }
}
?>