<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
  <?php
    include_once 'Pinguino.php';
    include_once 'Gato.php';
    include_once 'Perro.php';
    include_once 'Lagarto.php';
    $garfield = new Gato("macho", "romano");
    $roger = new Gato("macho");
    $angelina = new Gato("hembra");
    $silvestre = new Gato();
    echo $garfield."<br>";
    echo $roger."<br>";
    echo $angelina."<br>";
    echo $silvestre."<br><hr>";
    $tutu = new Ave();
    echo $tutu->aseate()."<br>";
    echo $tutu->vuela()."<br><hr>";
    echo $tutu->ponHuevo()."<br><hr>";
    $pingu = new Pinguino("macho");
    echo $pingu->nadar()."<br>";
    echo $pingu->vuela()."<br>";
    echo $pingu->come("palomitas")."<br>";
    $hanfry = new Perro("macho", "pastor belga");
    echo $hanfry->ladra()."<br>";
    echo $hanfry->dameLaPata()."<br>";
    echo $hanfry->tumbate()."<br><hr>";
    $rex = new Lagarto("macho");
    echo $rex->tomaElSol()."<br>";
    echo $rex->caza()."<br><hr>";
  ?>
  </body>
</html>
