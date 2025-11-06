<?php
if (isset($_GET['parola'])) {

    $parola = strtolower($_GET['parola']);
    $parolaInvertita = strrev('parola');

    if ($parola ==$parolaInvertita) {


        echo "La $parola è palindromo";
    } else {
        echo "$parola non è palindromo";
    }
}


?>