<?php
function gras($str) {
    $mots = explode(" ", $str);
    foreach ($mots as $mot) {
        if (isset($mot[0]) && $mot[0] >= "A" && $mot[0] <= "Z") {
            echo "<b>$mot</b> ";
        } else {
            echo $mot . " ";
        }
    }
}

function cesar($str, $decalage = 2) {
    $result = "";
    for ($i = 0; isset($str[$i]); $i++) {
        $c = $str[$i];
        if (($c >= "A" && $c <= "Z") || ($c >= "a" && $c <= "z")) {
            $base = ($c >= "A" && $c <= "Z") ? "A" : "a";
            $result .= chr((ord($c) - ord($base) + $decalage) % 26 + ord($base));
        } else {
            $result .= $c;
        }
    }
    echo $result;
}

function plateforme($str) {
    $mots = explode(" ", $str);
    foreach ($mots as $mot) {
        $len = 0;
        while (isset($mot[$len])) $len++;
        if ($len >= 2 && $mot[$len-2] == "m" && $mot[$len-1] == "e") {
            echo $mot . "_ ";
        } else {
            echo $mot . " ";
        }
    }
}
?>

<form method="post">
    <input type="text" name="str">
    <select name="fonction">
        <option value="gras">gras</option>
        <option value="cesar">cesar</option>
        <option value="plateforme">plateforme</option>
    </select>
    <button type="submit">Valider</button>
</form>

<?php
if (isset($_POST["str"]) && isset($_POST["fonction"])) {
    $str = $_POST["str"];
    $fonction = $_POST["fonction"];

    if ($fonction == "gras") {
        gras($str);
    } elseif ($fonction == "cesar") {
        cesar($str);
    } elseif ($fonction == "plateforme") {
        plateforme($str);
    }
}
?>
