<?php

$username = "Raffaella_Carrà";

$password = "Pedro";

if(isset($_GET['username']) && $_GET['password']){;
    $user = $_GET['username'];
    $pass = $_GET['password'];
}

if ($username == $user && $password == $pass) {

    echo "login effettuato";

}else {
    echo "Username o passsword errati";
}


?>