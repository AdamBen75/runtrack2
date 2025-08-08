<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$length = strlen($str);
$result = '';

for ($i = 1; $i < $length; $i++) {
    $result .= $str[$i];
}
$result .= $str[0];

echo $result;
?>