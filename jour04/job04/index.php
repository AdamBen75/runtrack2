<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Afficher POST</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background-color: #eee; }
    </style>
</head>
<body>
    <form method="POST" action="">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>
        <label for="email">Email :</label>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)): ?>
        <table>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
            <?php foreach ($_POST as $argument => $valeur): ?>
                <tr>
                    <td><?php echo htmlspecialchars($argument); ?></td>
                    <td><?php echo htmlspecialchars($valeur); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>