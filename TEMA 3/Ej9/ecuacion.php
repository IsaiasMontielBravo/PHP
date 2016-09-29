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
        $a = $_GET['a'];
         $b = $_GET['b'];
         $c = $_GET['c'];
        
         if($b>=0){
         echo "el resultado es x =" . ((-$b + (sqrt($b*$b)-4*$a*$c))/(2*$a));
         }else{
             echo "el resultado es x =" . ((-$b - (sqrt($b*$b)-4*$a*$c))/(2*$a));
         }
        ?>
    </body>
</html>
