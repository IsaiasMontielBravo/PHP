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
        $numero = $_GET['numero'];
        $contador = $_GET['contador'];
        $suma = $_GET['suma'];
        
        if (isset($numero)){
            
            if ($numero<0){
                echo "Tu media es " . $suma/$contador;
                
            }else{
                $suma = ($suma + $numero);
                $contador++;
               
            ?>
        Introduzca los numeros para su media, cuando quiera terminar introduzca un numero negativo
        <form action="media.php" method="get">
        <input type="number" name="numero">
        <input type="hidden" name="contador" value="<?= $contador ?>">
        <input type="hidden" name ="suma" value="<?= $suma ?>">
        <input type="submit" value="ok">
        </form>
        
<?php 
                
                
            }
            
            
        }
            
        ?>
    </body>
</html>
