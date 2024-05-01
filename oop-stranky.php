<?php
class Stranka {
    public $id;
    public $menu;
  

    public function __construct($id,$menu) {
       $this->id = $id;
       $this->menu = $menu;
       
    }
}

$zoznam = [
    "home" => new Stranka ("home", "Home"),
    "services" => new Stranka ("services", "Services"),
    "reservation" => new Stranka ("reservation", "Reservation"),
    "contact" => new Stranka ("contact", "Contact"),
    "404" => new Stranka ("404", "404") 
];