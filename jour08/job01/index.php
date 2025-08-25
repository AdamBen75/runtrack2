<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 1;
} else {
    $_SESSION['nbvisites']++;
}
?>
<p>Nombre de visites (session) : <?= $_SESSION['nbvisites'] ?></p>

<form method="post">
  <button name="reset" type="submit">reset</button>
</form>
