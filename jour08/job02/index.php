<?php
if (isset($_POST['reset'])) {
    setcookie('nbvisites', '', time() - 3600);
    $_COOKIE['nbvisites'] = 0;
} else {
    $n = isset($_COOKIE['nbvisites']) ? (int)$_COOKIE['nbvisites'] : 0;
    $n++;
    setcookie('nbvisites', (string)$n, time() + 3600*24*365);
    $_COOKIE['nbvisites'] = $n;
}
?>
<p>Nombre de visites (cookie) : <?= isset($_COOKIE['nbvisites']) ? $_COOKIE['nbvisites'] : 0 ?></p>

<form method="post">
  <button name="reset" type="submit">reset</button>
</form>
