<?php
class Stranka {
    public $id;
    public $menu;
  

    public function __construct($id,$menu) {
       $this->id = $id;
       $this->menu = $menu;
       
    }

    function getObsah(){
        return file_get_contents("$this->id.html");
    }

    function setObsah($obsah){
        file_put_contents("$this->id.html", $obsah);

    }
}

$zoznam = [
    "home" => new Stranka ("home", "Home"),
    "services" => new Stranka ("services", "Services"),
    "reservation" => new Stranka ("reservation", "Reservation"),
    "contact" => new Stranka ("contact", "Contact"),
    "404" => new Stranka ("404", "404") 
];