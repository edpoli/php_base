<?php

    class Book {

        //Attributi
        public string $titolo;
        public string $autore;
        public string $anno;
        public string $prezzo;
        public string $pagine;

     

        //Costruttore
        public function __construct(string $titolo, string $autore, string $anno, string $prezzo, string $pagine ){

            $this->titolo = $titolo;
            $this->autore = $autore;
            $this->anno = $anno;
            $this->prezzo = $prezzo;
            $this->pagine = $pagine;
        

        }

        //Metodo o Funzione
        public function getBook(): string {

            return "Titolo : $this->titolo - Autore $this->autore - 
                    Anno : $this->anno - Prezzo $this->prezzo Pagine : $this->pagine";

        }
    }
?>