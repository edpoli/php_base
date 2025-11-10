
<?php


require_once 'functions.php';

    session_start();

        if(!isset($_SESSION['catalogo'])){

            $_SESSION['catalogo'] = []; // prima volta : rubrica nella sessione del browser

        }

        //Devo fare un riferimento all array della sessione con &
        $catalogo = &$_SESSION['catalogo'];

        //gestione invio form per aggiungere libro
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])){

        $titolo = trim($_POST['titolo']); // prendo il nome dall input e lo salvo uin una variabile
        $autore = trim($_POST['autore']); // preso l'autore
        $anno = trim($_POST['anno']); // prendo l'anno
        $prezzo = trim($_POST['prezzo']); // preso il prezzo
        $pagine = trim($_POST['pagine']); // prendo le pagine
        
        
    
        if ($titolo && $autore&&$anno&&$anno&&$prezzo&&$pagine){

            addBooks($catalogo, $titolo, $autore, $anno, $prezzo, $pagine); // aggiungo il contatto alla rubrica

            $message = "Libro aggiunto!";

        }else{

            $message = "Inserisci i dati necessari";
        }
    }

    
    $searchResult = null;

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])){


        $searchTitle = trim($_POST['search_title']); // prendo il titolo da cercare
        $searchResult = searchBooks($catalogo, $searchTitle);

    }





    ?>

<?php include 'header.php'; ?>


    <section class="vh-100" style="padding: 200px">


        <form action="" method= "Post">

                Inserisci un titolo: <input type="text" name="titolo"> <br> <br>
                Inserisci un autore: <input type="text" name="autore"> <br> <br>
                Inserisci un anno: <input type="number" name="anno"> <br> <br> 
                Inserisci un prezzo: <input type="text" name="prezzo"> <br> <br>
                Inserisci numero di pagine: <input type="text" name="pagine"> <br> <br>
                <input type="submit" class="btn btn-primary" value='Aggiungi libro' name="add"> <br> <br>
                
        </form>

        
    <!--Ricerca del contatto-->
    <h2>Ricerca Libro</h2>
    <form action="" method="POST">

        Titolo: <input type="text" name="search_title">

        <button type="submit" name="search">Cerca</button>

    </form>

        <?php

        //campo ricerca
        if($searchResult !== null){

            echo "Risultato : " . $searchResult->getBook();

        }elseif (isset($_POST['search'])){

            echo "Contatto non trovato";

        }

    ?>

    

         <h2>Elenco Contatti</h2>

    <?php

        printBooks($catalogo);

    ?>





    <!--Sezione di debug in formato testo originale-->
    <h2>Debug sessione</h2>

    <pre> <?php  print_r($_SESSION)  ?> </pre>




    </section>


    <?php include 'footer.php' ?>





