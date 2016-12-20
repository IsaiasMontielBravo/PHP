<?php
include_once 'Animal.php';
class Gato extends Animal {
  
  private $raza;
  
  public function __construct($s, $r) {
    parent::__construct($s);
    if (isset($r)) {
      $this->raza = $r;
    } else {
      $this->raza = "siamés";
    }
  }
  
  public function __toString() {
    return parent::__toString()."<br>Raza: $this->raza";
  }
  
  public function maulla() {
    return "Miau";
  }
  
  public function ronronea() {
    return "mrr";
  }
  
  public function come($comida) {
    if ($comida == "Lasaña") {
      return "Hmmmm, delicioso";
    } else {
      return "¡¡Dame lasaña!!";
    }
  }
  
  public function peleaCon($contrincante) {
    if ($this->getSexo() == "hembra") {
      return "No me gusta pelear";
    } else if ($contrincante.getSexo() == Sexo.HEMBRA) {
      return "No peleo contra gatitas";
    } else  {
      return "Ven aquí que te vas a enterar";
    }
  }
  
  public function aseate() {
    return "Me estoy lamiendo";
  }
  
  public function caza() {
    return "Estoy cazando ratones";
  }
}
