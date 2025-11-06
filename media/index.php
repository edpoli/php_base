

<h2> Form Media </h2>

<form action="" method= "Post">


Inserisci un numero: <input type="number" name="n1"> <br>
Inserisci un numero: <input type="number" name="n2"> <br>
Inserisci un numero: <input type="number" name="n3"> <br>
<input type="submit" value = "calcola la media" >

</form>

<?php

if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3'])) {

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $somma = $n1 + $n2 + $n3;
    $media = $somma/3;

    echo "La media è: $media";
}




?>