
<?php 
    class Movie {
        public $titolo;
        public $genere;
        public $nomeRegista;
        public $personaggi;

        function __construct($titolo, $genere, $nomeRegista, $personaggi){

            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->nomeRegista = $nomeRegista;
            $this->personaggi = $personaggi;
            
        }
    
        public function getTitolo(){
            return $this->titolo;
        }



    }

   
    
; ?>