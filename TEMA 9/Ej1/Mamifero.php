<?php
include_once 'Animal.php';
class Mamifero extends Animal {
  
  public function __construct($s) {
    parent::__construct($s);
  }
  
  public function amamanta() {
    if ($this->getSexo() == "macho") {
      return "Soy macho, no puedo amamantar";
    } else {
      return "Da el pecho";
    }
  }
  
  public function cuidaCrias() {
    return "Estoy cuidando mis crias";
  }
  
  public function juega() {
    return "Estoy jugando";
  }
}
