<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Maison ASCII</title>
    <style>
        pre {
            font-family: monospace;
            font-size: 16px;
            line-height: 1;
        }
        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form method="post">
        <label>Largeur: <input type="text" name="largeur" required></label>
        <label>Hauteur: <input type="text" name="hauteur" required></label>
        <button type="submit">Dessiner</button>
    </form>

    <?php
    function dessinerMaison($largeur, $hauteur) {
        $maison = "";

        // Toit (triangle)
        $toit_hauteur = intval($largeur / 2);
        for ($i = 0; $i < $toit_hauteur; $i++) {
            $espaces = str_repeat(" ", $toit_hauteur - $i - 1);
            $toit = "/";
            $milieu = str_repeat(" ", $i * 2);
            $fin = "\\";
            $maison .= $espaces . $toit . $milieu . $fin . "\n";
        }

        // Base du toit
        $maison .= "/" . str_repeat("_", $largeur) . "\\\n";

        // Murs (rectangle)
        for ($i = 0; $i < $hauteur; $i++) {
            $maison .= "|" . str_repeat(" ", $largeur) . "|\n";
        }

        // Sol
        $maison .= "|" . str_repeat("_", $largeur) . "|\n";

        return "<pre>$maison</pre>";
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $largeur = isset($_POST['largeur']) ? intval($_POST['largeur']) : 0;
        $hauteur = isset($_POST['hauteur']) ? intval($_POST['hauteur']) : 0;

        if ($largeur >= 4 && $hauteur >= 2) {
            echo dessinerMaison($largeur, $hauteur);
        } else {
            echo "<p>Veuillez entrer une largeur ≥ 4 et une hauteur ≥ 2.</p>";
        }
    }
    ?>
</body>
</html>