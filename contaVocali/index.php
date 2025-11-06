


<form action="" method= "Post">

<label for=""> Inserisci un testo </label>
<input type="text" name="frase">
                    <input type= "submit" value = "Conta Vocali">
</form>


<?php
if(isset($_POST['frase'])) {

    $frase = strtolower($_POST['frase']);



    $vocali = ["a", "e", "i",  "o", "u"];

    $contaVocali = 0;


    for ($i = 0; $i < strlen($frase); $i++) {



        if(in_array($frase[$i], $vocali)) {

            $contaVocali++;

        }
    }

    echo "<p> '$frase' contiene: $contaVocali vocali </p>";
}



?>
