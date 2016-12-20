<?php
include_once 'Ave.php';
class Pinguino extends Ave {
  public function __construct($s) {
    parent::__construct($s);
  }
  public function nadar() {
    return parent::aseate()."Nadando voooy";
  }
  
  public function vuela() {
    return "No puedo volar";
  }
  
  public function come() {
    return "Estoy comiendo";
  }
}
