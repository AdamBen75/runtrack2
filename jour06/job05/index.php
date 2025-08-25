<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Formulaire avec styles</title>

    <?php
    $style = isset($_GET['style']) ? $_GET['style'] : "style1";

    $styles_disponibles = ["style1", "style2", "style3"];
    if (!in_array($style, $styles_disponibles)) {
        $style = "style1";
    }

    echo '<link rel="stylesheet" href="'.$style.'.css">';
    ?>
</head>
<body>
    <h1>Choix du style du formulaire</h1>

    <form method="get" action="">
        <label for="style">Style :</label>
        <select name="style" id="style">
            <option value="style1" <?php if($style=="style1") echo "selected"; ?>>style1</option>
            <option value="style2" <?php if($style=="style2") echo "selected"; ?>>style2</option>
            <option value="style3" <?php if($style=="style3") echo "selected"; ?>>style3</option>
        </select>
        <button type="submit">Valider</button>
    </form>
</body>
</html>
