<?php
$numero = $_GET['numero'];
setcookie("numero", $numero, 0);
header("Location: menu.html");
?>