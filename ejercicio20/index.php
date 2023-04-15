<?php
if (isset($_COOKIE['visitas'])) {
    $visitas = $_COOKIE['visitas'];
} else {
    $visitas = 0;
}
//Si la cookie "visitas" existe, mostrar el mensaje de agradecimiento y mostrar el número de visitas.
if ($visitas > 0) {
    echo "Gracias por ser un visitante frecuente. Usted ha visitado este sitio $visitas veces.";
}
//Si la cookie "visitas" no existe, mostrar el mensaje de bienvenida.
if ($visitas == 0) {
    echo "Bienvenido a nuestro sitio web.";
}
//Si el número de visitas es mayor a 5, mostrar una encuesta.
if ($visitas > 5) {
    echo "Por favor, indique qué le gusta de este sitio:<br>";
    echo "<input type='radio' name='opciones' value='buena presentación'> Buena presentación<br>";
    echo "<input type='radio' name='opciones' value='opciones'> Opciones<br>";
}
//Actualizar la cookie "visitas" con el nuevo valor.
$visitas++;
setcookie('visitas', $visitas, 0);
