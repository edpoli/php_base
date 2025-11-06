


<form action="" method="Post">

Inserisci un numero: <input type="number" name= "numero"> <br>
<input type="submit" value = "Mostra tabellina"> 


</form>


<?php


if (isset($_POST["numero"])) {

    $num = $_POST['numero'];
}


for ($i = 0; $i <=10; $i++) {

  
    echo "<p> $num x  $i =" . ($num*$i). "</p>" ;

}


?>
