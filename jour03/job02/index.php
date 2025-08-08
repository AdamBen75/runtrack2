<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$result = "";

for ($i = 0; $i < strlen($str); $i += 2) {
    $result .= $str[$i];
}

echo $result;
?>