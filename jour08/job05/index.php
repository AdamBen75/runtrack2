<?php
session_start();

if (!isset($_SESSION['grid'])) {
    $_SESSION['grid'] = array_fill(0, 9, '-');
    $_SESSION['turn'] = 'X';
    $_SESSION['msg']  = '';
}

function check_winner($g) {
    $wins = [
        [0,1,2],[3,4,5],[6,7,8],
        [0,3,6],[1,4,7],[2,5,8],
        [0,4,8],[2,4,6]
    ];
    foreach ($wins as $w) {
        if ($g[$w[0]] !== '-' && $g[$w[0]] === $g[$w[1]] && $g[$w[1]] === $g[$w[2]]) {
            return $g[$w[0]];
        }
    }
    return null;
}

function reset_game($msg = '') {
    $_SESSION['grid'] = array_fill(0, 9, '-');
    $_SESSION['turn'] = 'X';
    $_SESSION['msg']  = $msg;
}

if (isset($_POST['cell'])) {
    $i = (int)$_POST['cell'];
    if ($i >= 0 && $i < 9 && $_SESSION['grid'][$i] === '-') {
        $_SESSION['grid'][$i] = $_SESSION['turn'];

        $winner = check_winner($_SESSION['grid']);
        if ($winner) {
            reset_game("$winner a gagné");
        } elseif (!in_array('-', $_SESSION['grid'], true)) {
            reset_game("Match nul");
        } else {
            $_SESSION['turn'] = ($_SESSION['turn'] === 'X') ? 'O' : 'X';
            $_SESSION['msg'] = '';
        }
    }
}

if (isset($_POST['reset'])) {
    reset_game('');
}

$g = $_SESSION['grid'];
?>
<h3>Morpion — Tour : <?= $_SESSION['turn'] ?></h3>
<?php if ($_SESSION['msg']): ?>
  <p><b><?= htmlspecialchars($_SESSION['msg']) ?></b></p>
<?php endif; ?>

<form method="post">
  <table border="1" cellpadding="10" style="border-collapse:collapse;text-align:center;">
    <?php for ($r=0; $r<3; $r++): ?>
      <tr>
        <?php for ($c=0; $c<3; $c++):
          $idx = $r*3 + $c; ?>
          <td style="width:60px;height:60px;">
            <?php if ($g[$idx] === '-'): ?>
              <button type="submit" name="cell" value="<?= $idx ?>">-</button>
            <?php else: ?>
              <?= $g[$idx] ?>
            <?php endif; ?>
          </td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>
  <br>
  <button name="reset" type="submit">réinitialiser la partie</button>
</form>
