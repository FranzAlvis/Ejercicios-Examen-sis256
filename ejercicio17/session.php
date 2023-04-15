<?php
session_start();
if (isset($_GET['numero'])) {
    $_SESSION['numero'] = $_GET['numero'];
}
?>
<h1>Multiplicación de vectores</h1>

<form method="post" action="resultado.php">
    <h2>Vector 1 (1 x n)</h2>
    <?php
    $numero = $_SESSION['numero'];
    for ($i = 1; $i <= $numero; $i++) {
        echo "<label for='v1$i'>Valor $i </label>";
        echo "<input type='number' name='v1$i'><br>";
    }
    ?>
    <h2>Vector 2 (n x 1)</h2>
    <?php
    for ($i = 1; $i <= $numero; $i++) {
        echo "<label for='v2$i'>Valor $i </label>";
        echo "<input type='number' name='v2$i'><br>";
    }
    ?>
    <input type="submit" value="Multiplicar">
</form>