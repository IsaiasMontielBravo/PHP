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
            $numero= $_GET['numero'];
            $contImpar=0;
            
            
            
            if($numero <=0){
                $positivo = $numero + $positivo;
                
                echo " Es positivo";
            }else{
               echo $cont . $mediaImpar;
               $contImpar++;
            }
            
            if($numero % 2 ==0){
                $par = $numero + $par;
            }else{
                $impar = $numero + $impar;
                
            }
            
            $mediaImpar =$impar/$contImpar;
            $mediaImpar=
            
        
        }
        
          
        
        ?>
    </body>
</html>
