<?php

class Auteur {
    private string $_nom;
    private string $_prenom;
    private array $_livres;
    private DateTime $_dateNaissance;


    public function __construct($nom, $prenom, string $dateNaissance){
        $this -> _nom = $nom;
        $this -> _prenom = $prenom;
        $this -> _livres = array();
        $this -> _dateNaissance = new DateTime($dateNaissance) ;
    }



    public function getNom(){
        return $this -> _nom;
    }
    public function setNom($nom){
        $this -> _nom = $nom;
    }
    public function getPrenom(){
        return $this -> _prenom;
    }
    public function setPrenom($prenom){
        $this -> _prenom = $prenom;
    }
    public function getDateTime(){
        return $this -> _dateNaissance;
    }
    public function setDateTime($dateNaissance){
        $this -> _dateNaissance = $dateNaissance;
    }



    public function ajouterLivre($livre){
        $this -> _livres[] = $livre;
    }

    public function calculerAge(){
        $dateNaissance = $this->_dateNaissance;
        $dateCourante = new DateTime();
        $diff = $dateNaissance -> diff($dateCourante);
        return $diff -> y;
    }

    public function displayAge(){
        echo "<br>" .$this -> _nom ." " .$this -> _prenom ." " ."a" ." " .$this -> calculerAge() ." " ."ans" ."<br>";
    }

    
    public function afficherBibliographie(){
        echo "<br> Livres de" ." " .$this -> _nom ." " .$this -> _prenom ." " ."<br>";
        foreach ($this ->_livres as $livre){
            echo $livre;
        }
    }
    
    public function __toString(){
        return "{$this -> _nom} {$this -> _prenom} {$this -> _dateNaissance} <br>";
    }    

   

}













// public function CalculerAge (){
//     $_dateNaissance = $this->_dateNaissance;
//     $aujourdhui= new DateTime();
//     $interval = $_dateNaissance->diff($aujourdhui);
//     $elapsed = $interval->format('%y');
//     return $elapsed; } 


?>


