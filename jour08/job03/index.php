<?php
session_start();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

if (isset($_POST['prenom']) && $_POST['prenom'] !== '') {
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}
?>
<form method="post">
  <input type="text" name="prenom" placeholder="Votre prénom">
  <button type="submit">Ajouter</button>
  <button name="reset" type="submit">reset</button>
</form>

<h3>Prénoms :</h3>
<ul>
  <?php foreach ($_SESSION['prenoms'] as $p): ?>
    <li><?= htmlspecialchars($p) ?></li>
  <?php endforeach; ?>
</ul>
