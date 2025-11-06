<?php

if (isset($_POST['n1']) + isset($_POST['n2']) + isset($_POST['n3'])) {

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $media = ($n1 + $n2 + $n3) /3;

    echo "La media è: $media";
}




?>



<form action="" method= "Post">


Inserisci un numero: <input type="number" name="n1">
Inserisci un numero: <input type="number" name="n2">
Inserisci un numero: <input type="number" name="n3">
<input type="submit" value = "calcola la media" >

</form>