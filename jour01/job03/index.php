<!DOCTYPE html>
<html lang="fr">

    <title>Variables PHP</title>

<?php
$bool = true;
$entier = 10;
$texte = "Bonjour";
$decimal = 3.14;
?>

<h2>Tableau des variables</h2>

<table border="2">
    <tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
    </tr>
    <tr>
        <td>booléen</td>
        <td>$bool</td>
        <td><?php echo $bool ? 'true' : 'false'; ?></td>
    </tr>
    <tr>
        <td>entier</td>
        <td>$entier</td>
        <td><?php echo $entier; ?></td>
    </tr>
    <tr>
        <td>texte</td>
        <td>$texte</td>
        <td><?php echo $texte; ?></td>
    </tr>
    <tr>
        <td>nombre à virgule</td>
        <td>$decimal</td>
        <td><?php echo $decimal; ?></td>
    </tr>
</table>
</html>
