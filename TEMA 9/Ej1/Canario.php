<?php
include_once 'Ave.php';
class Canario extends Ave {
  
  private $color;
  
  public function __construct($s, $c) {
    parent::__construct($s);
    if (isset($c)) {
      $this->color = $c;
    } else {
      $this->color = "amarillo";
    }
  }
  
  public function __toString() {
    return parent::__toString()."<br>Color: $this->color";
  }
  
  public function canta() {
    return "Tralali";
  }
  
  public function pia() {
    return "Pio pio";
  }
  
  public function caza() {
    return "Grrrrrrrrrr";
  }
}
