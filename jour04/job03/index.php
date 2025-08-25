<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur d'arguments POST</title>
</head>
<body>
    <form method="POST" action="">
        <label>Nom: <input type="text" name="nom"></label><br>
        <label>Prénom: <input type="text" name="prenom"></label><br>
        <label>Email: <input type="text" name="email"></label><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $count = count($_POST);
        echo "Le nombre d'argument POST envoyé est : " . $count;
    }
    ?>
</body>
</html>