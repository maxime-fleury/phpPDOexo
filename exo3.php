<?php
abstract class Animal{
    public function respire(){
        echo "Respire..." . "<br>";
    }
}
class Oiseau extends Animal{
    private $nom;
    private $age;
    public function __construct($nom, $age){
        $this->nom = $nom;
        $this->age = $age;
        $this->affiche();
        $this->respire();
        $this->voler();
    }
    public function voler(){
        echo "Vol très haut !" . "<br>";
    }
    public function affiche(){
        echo $this->nom . " " . $this->age . "<br>";
    }
}
class Reptile extends Animal{
    private $nom;
    private $age;
    public function __construct($nom, $age){
        $this->nom = $nom;
        $this->age = $age;
        $this->affiche();
        $this->respire();
        $this->asDesEcailles();
    }
    public function asDesEcailles(){
        echo "Si je pouvais parler je dirai que j'ai des écailles." . "<br>";
    }
    public function affiche(){
        echo $this->nom . " " . $this->age . "<br>";
    }
}
class Aigle extends Oiseau{
    function __construct(){
        parent::__construct("Aiglantine", 90);
    }
}
class Faucon extends Oiseau{
    function __construct(){
        parent::__construct("Fauconil", 53);
    }
}
class Tortue extends Reptile{
    function __construct(){
        parent::__construct("Tortuga", 25);
    }
}
class Crocodile extends Reptile{
    function __construct(){
        parent::__construct("Crocow", 19);
    }
}
$p = new Crocodile();
echo "<br>";
$f = new Faucon();
echo "<br>";
$a = new Aigle();
echo "<br>";
$t = new Tortue();
