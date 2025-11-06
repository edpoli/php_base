<!--------------------------- VARIE ------------------------------------------>

<?php


        // commento una riga
        /* su più righe  
        */


        /*
        string = stringa
        int --> numero intero
        float -> numero decimale
        bool --> booleano

        */

// variabile con $
//$nome = ['pippo', 'topolino'];

//echo  $nome, " è una funzione;", " 'echo' stampa a schermo qualcosa"

    //    var_dump($nome)  // var_dump mostra valore, tipo, lunghezza;

        ?>


<!---------------------------- Variabili----------------------------------------->
<?php

/*$nome = "Luca";
$eta = 35;

echo "ciao $nome, hai $eta anni";
//var_dump ($nome);*/


?>


<!-----------------------------     COSTANTI ----------------------------------------------------------->


<?php

/*
define ('Iva', 22);

define ('commercialista', 800);

define ('730', 35);


echo Iva, commercialista, 730; */


?>


<!------------------------------------- CONDIZIONI IF/ELSE ---------------------------------------->

<?php

 /*$numero = 0;

if($numero > 0) {

    echo "positivo";
} else {
    echo "negativo o zero";
}
*/
?>

<!------------------------------------- switch case ---------------------------------------->



<?php

/*

$colore = "red";

switch ($colore) {

case "red"; 
echo "Hai scelto rosso";
break;

case "yellow";
echo "Hai scelto giallo";
break;

default:
    echo "nessun colore";

}
*/

?>



<!------------------------------------  cicli ---------------------------------------------->



<?php
echo "<p> cicli for <p>";
for ($i = 0; $i < 5; $i ++) {

echo "numero $i <br> <br>";


}
?>



<?php

echo "<p> cicli while <p>";

$i = 1;
while  ($i < 3) {

echo  "numero  $i <br>";
$i ++;

}



echo "<h5> cicli while </h5>";

$nomi = ["papà, mamma, fratello, sorella"];
foreach ($nomi as $nome);

echo  "$nome <br>";





?>


<!------------------------------ FUNZIONI --------------------------------------------------->

<?php 

function saluta ($x) {

    return "ciao, $x";
}

echo saluta ("A");




?>