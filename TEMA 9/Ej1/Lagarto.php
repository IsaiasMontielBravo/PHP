<?php
include_once 'Animal.php';
class Lagarto extends Animal {
  
  public function tomaElSol() {
    return "Estoy tomando el Sol";
  }
  
  public function come() {
    return "Estoy Comiendo";
  }
  
  public function caza() {
    return "Grrrrrr";
  }
}
