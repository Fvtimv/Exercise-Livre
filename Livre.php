<?php

class Livre{
    
    private string $_titre;
    private int $_nbPages;
    private int $_anneeParution;
    private float $_prix;
    private Auteur $_auteur;


    public function __construct($titre, $nbPages, $anneeParution, $prix, $auteur ){
        $this ->_titre = $titre;
        $this ->_nbPages = $nbPages;
        $this ->_anneeParution = $anneeParution;
        $this ->_prix = $prix;
        $this ->_auteur = $auteur;
        $auteur -> ajouterLivre($this); // 
    }

    public function getTitre(){
        return $this -> _titre;
    }
    public function setTitre($titre){
        $this -> _titre = $titre;
    }
    public function getNbPages(){
        return $this -> _nbPages;
    }
    public function setNbPages($nbPages){
        $this -> _nbPages = $nbPages;
    }
    public function getAnneeParution(){
        return $this -> _anneeParution;
    }
    public function setAnneeParution($anneeParution){
        $this -> _anneeParution = $anneeParution;
    }
    public function getPrix(){
        return $this -> _prix;
    }
    public function setPrix($prix){
        $this -> _prix = $prix;
    }
    public function getAuteur(){
        return $this -> _auteur;
    }
    public function setAuteur($auteur){
        $this -> _auteur = $auteur;
    }


    public function __toString(){
        return $this ->_titre ." " ."(".$this -> _anneeParution.")" .":" 
        . " ".$this -> _nbPages ." " ."pages" ." " ."/" ." " .$this -> _prix ." " ."€"  ."<br>";
    }


}


