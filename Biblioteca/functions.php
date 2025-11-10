
<?php

require_once 'Book.php';

function addBooks(array &$catalogo, string $titolo, string $autore, string $anno, string $prezzo, string $pagine) : void {   //void è un tipo di ritorno, posso anche ometterlo ma significa che restituisce nulla

        //devo creare un oggetto contatto che si aggiunge all array rubrica
        $catalogo[] = new Book ($titolo, $autore, $anno, $prezzo, $pagine);


    }


function printBooks(array &$catalogo) : void {

        foreach ($catalogo as $libro){

            echo $libro->getBook() . "<br>"; //vado a recuperare il metodo getInfo()

        }

        
    }

    function searchBooks(array $catalogo, string $titolo): ?Book {

        foreach ($catalogo as $libro){

            if(strtolower($libro->titolo) === strtolower($titolo)){

                return $libro;
            }

        }

        return null; // nessun contatto trovato

    }



?>