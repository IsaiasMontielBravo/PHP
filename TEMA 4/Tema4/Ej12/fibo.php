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
            $contador = 0;
            $salida="";
            $num1=0;
            $num2=1;
            $res;
        
        do{
            $res=0;
            if($contador==0){
                $salida.="0, ";
                $contador+=1;
            }else if($contador==1){
                $salida.="1 ";
                $contador+=1;
            }else{
                $res=$num1+$num2;
                $num1=$num2;
                $num2=$res;
                $salida.=", " . $res;
                $contador++;
            }
            
        }while($numero!=$contador);
            echo $salida;
        
        }
        
       
        ?>
    </body>
</html>
