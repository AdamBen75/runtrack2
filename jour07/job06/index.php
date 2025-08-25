<?php
function leetSpeak($str) {
    $result = "";
    for ($i = 0; isset($str[$i]); $i++) {
        $c = $str[$i];
        if ($c == "A" || $c == "a") $c = "4";
        elseif ($c == "B" || $c == "b") $c = "8";
        elseif ($c == "E" || $c == "e") $c = "3";
        elseif ($c == "G" || $c == "g") $c = "6";
        elseif ($c == "L" || $c == "l") $c = "1";
        elseif ($c == "S" || $c == "s") $c = "5";
        elseif ($c == "T" || $c == "t") $c = "7";

        $result .= $c;
    }
    return $result;
}

echo leetSpeak("LaPlateforme"); 
?>
