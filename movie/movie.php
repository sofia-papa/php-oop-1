
<?php 
    class Movie {
        public $titolo;
        public $genere;
        public $nomeRegista;
        public $personaggio;

        function __construct($_titolo, $_genere, $_nomeRegista, $_personaggio){

            $this->titolo = $_titolo;
            $this->genere = $_genere;
            $this->nomeRegista = $_nomeRegista;
            $this->personaggio = $_personaggio;
            
        }
    
        public function getTitolo(){
            return $this->titolo;
        }

    }

   
    
?>

<pre>
    <?php 
         
         $movieA = new Movie ('Harry Potter', 'fantasy', 'Charles', 'Harry');
         $movieB = new Movie ('The Holiday', 'comedy', 'Rob', 'Rick');

         var_dump($movieA);
         var_dump($movieB);
    
    ; ?>
    
</pre>