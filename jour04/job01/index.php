<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Compteur d'arguments GET</title>
</head>
<body>
    <form method="get" action="">
        <label for="champ1b">Champ 1b :</label>
        <input type="text" name="champ1b" id="champ1b"><br><br>
        <label for="champ1">Champ 1 :</label>
        <input type="text" name="champ1" id="champ1"><br><br>
        <label for="champ2">Champ 2 :</label>
        <input type="text" name="champ2" id="champ2"><br><br>
        <label for="champ3">Champ 3 :</label>
        <input type="text" name="champ3" id="champ3"><br><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    $nbArguments = count($_GET);
    echo "Le nombre d'argument GET envoyé est : " . $nbArguments;
    ?>
</body>
</html>