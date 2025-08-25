<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nombre Pair ou Impair</title>
</head>
<body>
    <form method="get" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" id="nombre" name="nombre">
        <button type="submit">Vérifier</button>
    </form>

    <?php
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        if (is_numeric($nombre) && $nombre !== '') {
            if ($nombre % 2 == 0) {
                echo "Nombre pair";
            } else {
                echo "Nombre impair";
            }
        }
    }
    ?>
</body>
</html>