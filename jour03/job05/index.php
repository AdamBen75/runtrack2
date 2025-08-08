<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'à', 'â', 'ä', 'é', 'è', 'ê', 'ë', 'î', 'ï', 'ô', 'ö', 'ù', 'û', 'ü', 'ÿ'];
$consonnes = ['b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','z'];

$str_lower = mb_strtolower($str);

for ($i = 0; $i < mb_strlen($str_lower); $i++) {
    $char = mb_substr($str_lower, $i, 1);
    if (in_array($char, $voyelles)) {
        $dic["voyelles"]++;
    } elseif (in_array($char, $consonnes)) {
        $dic["consonnes"]++;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de Voyelles et Consonnes</title>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 8px; }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $dic["voyelles"] ?></td>
                <td><?= $dic["consonnes"] ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>