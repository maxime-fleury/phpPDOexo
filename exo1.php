<?php
class Film{
    private $id;
    private $nom, $realisa;
    private $annee;

    function __construct($id, $nom, $realisa, $annee){
        $this->id = $id;
        $this->nom = $nom;
        $this->realisa = $realisa;
        $this->annee = $annee;
    }
    function setId($id){
        $this->id = $id;
    }
    function getId(){
        return $this->id;
    }
    function getNom(){
        return $this->nom;
    }
    function setNom($nom){
        $this->nom = $nom;
    }
    function getReal(){
        return $this->realisa;
    }
    function setReal($realisa){
        $this->realisa = $realisa;
    }
    function getAnnee(){
        return $this->annee;
    }
    function setAnnee($annee){
        $this->annee = $annee;
    }
    function toString(){
        return "id: " . $this->id . " nom: " . $this->nom . " realisateur: " . $this->realisa . " année: " .$this->annee;
    }
}
$p = new Film("0","Stargate","Maxime Fleury", 1990);
echo $p->toString();
