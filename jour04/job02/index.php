<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Afficher les arguments GET</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <form method="get" action="">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>
        <label for="age">Âge :</label>
        <input type="text" id="age" name="age"><br><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php if (!empty($_GET)): ?>
        <table>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
            <?php foreach ($_GET as $arg => $val): ?>
                <tr>
                    <td><?php echo htmlspecialchars($arg); ?></td>
                    <td><?php echo htmlspecialchars($val); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>