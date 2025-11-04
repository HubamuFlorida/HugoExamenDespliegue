<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (rand(0, 1)) {
        echo "Has ganado!";
    } else {
        echo "Has perdido.";
    }
    header("refresh:2;url=index.php");
    exit;
    }
?>

<form method="post">
    <button type="submit">Jugar</button>
</form>