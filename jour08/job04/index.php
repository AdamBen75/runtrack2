<?php

if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600);
    $_COOKIE['prenom'] = null;
}

if (isset($_POST['connexion'], $_POST['prenom']) && $_POST['prenom'] !== '') {
    setcookie('prenom', $_POST['prenom'], time() + 3600*24*30);
    $_COOKIE['prenom'] = $_POST['prenom'];
}

$prenom = isset($_COOKIE['prenom']) ? $_COOKIE['prenom'] : null;
?>

<?php if (!$prenom): ?>
  <form method="post">
    <input type="text" name="prenom" placeholder="Votre prénom">
    <button name="connexion" type="submit">Connexion</button>
  </form>
<?php else: ?>
  <p>Bonjour <?= htmlspecialchars($prenom) ?> !</p>
  <form method="post">
    <button name="deco" type="submit">Déconnexion</button>
  </form>
<?php endif; ?>
