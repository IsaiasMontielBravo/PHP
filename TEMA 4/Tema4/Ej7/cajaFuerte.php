<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    $oportunidades = $_POST['oportunidades'];
    $codigo = $_POST['codigo'];
    $numeroSecreto = 9520;
    if ($codigo == $numeroSecreto) {
    echo "La caja ha sido abierta.";
    } else {
    if ($oportunidades == 0) {
    echo "Lo siento, has agotado todas tus oportunidades. caja bloqueada";
    } else {
        echo "Lo siento ese no es el numero intentelo otra vez";
        
    
    
    ?>
        Numero introducido incorrecto, Te quedan <?= $oportunidades-- ?> oportunidades antes que la caja quede bloqueada.<br>
        introduzca el codigo
        <form action="cajaFuerte.php" method="post">
        <input type="number" name="codigo">
        <input type="hidden" name="oportunidades" value="<?= $oportunidades ?>">
        <input type="submit" value="Continuar">
        </form>
        
<?php
}
}
?>
    </body>
</html>
