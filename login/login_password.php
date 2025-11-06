<?php

$username = "Raffaella_Carrà";

$password = "Pedro";

if(isset($_POST['username']) == $username && ($_POST['password']) == $password) {
  
    echo "login effettuato";

}else {
    echo "Username o passsword errati";
}


?>