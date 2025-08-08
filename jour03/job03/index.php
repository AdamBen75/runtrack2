<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$vowels = '';

for ($i = 0; $i < strlen($str); $i++) {
    if (in_array(strtolower($str[$i]), ['a', 'e', 'i', 'o', 'u', 'y'])) {
        $vowels .= $str[$i];
    }
}

echo $vowels;
?>