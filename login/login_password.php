<?php

$username = "Abba";

$password = "Pedro";

if(isset($_GET['username'])){;
$user = $_GET['username'];
}

if(isset($_GET['password'])){
    $pass = $_GET['password'];
}

if ($username == $user && $password == $pass) {

    echo "login effettuato";

}else {
    echo "Username o passsword errati";
}


?>