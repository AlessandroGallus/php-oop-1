<?php
  class Movie {
    public $titolo;
    public $prezzo;
    public $durata;
    public $genere;


    public function __construct($_titolo, $_durata, $_genere){

      $this->titolo = $_titolo;
      $this->durata = $_durata;
      $this->genere = $_genere;

    } 

    public function setPrice($_prezzo){
      $this->prezzo = $_prezzo;
    }

    public function getInfoMovies() {
      return "Il film " . $this->titolo . " costa " . $this->prezzo . "€ e dura " . $this->durata;
    }
    public function getGenre(){
      return "Genere: " . $this->genere;
    }
  }
?>