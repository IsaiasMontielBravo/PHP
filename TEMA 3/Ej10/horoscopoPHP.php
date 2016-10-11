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
        $a=$_GET['a'];
        $b=$_GET['b'];
        
        
        
        switch($b){
            case "Enero";
            if(($a>20)&&($a<31)){
                echo 
                " ACUARIO:";
            
        }
        break;
         case "Febrero";
            if($a<18){
                echo " ACUARIO:";
                    
        }else{
            echo"PISCIS";
        }
        break;
        }
        ?>
    </body>
</html>
