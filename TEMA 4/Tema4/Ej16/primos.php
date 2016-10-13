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
         if (isset($_GET["numero"])){
            $numero = $_GET['numero'];
            $cont=0;
            $text = 'Es primo';
            for($i =2;$i<$numero;$i++){
               if ($numero % $i == 0) $cont++; 
            }   
            
            if ($cont>0)$text = 'No es primo';
            echo $text;
        }
         
        ?>
    </body>
</html>
