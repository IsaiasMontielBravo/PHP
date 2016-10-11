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
        
        if(isset($_GET["numero"])){
		if($_GET["contador"]==9){
        
        
        $array=$_GET["array"]. ", ". $_GET["numero"];
        $numero = explode(", " , $array);
        $maximo = 0;
        $minimo = 1000;
        
        
        foreach ($numero as $n){
            if ($n>$maximo){
                $maximo=$n;
            }else if ($n<$minimo){
                $minimo=$n;
            }
        }
         
        foreach ($numero as $n){
                if ($n==$maximo){
                    echo $n. "Maximo";
                }else if ($n==$minimo){
                    echo $n. "minimo";
                }else{
                    echo $n;
                }
                echo " ";
        }
        
                }else if($_GET["contador"]==0){
                            $array=$_GET["numero"];
                            $contador=$_GET["contador"] + 1;
                }else{
                    $array=$_GET["array"]. ", ".$_GET["numero"];
                    $contador=$_GET["contador"] +1;
                }
                    
        }
        
                else{
                    $array="";
                    $contador=0;
                }
  
        ?>
        <form action="#" method="get">
        Introduzca un número:
        <input type="text" name="numero" autofocus required/>
		<input type="submit"/>
		<input type="hidden" name="contador" value="<?=$contador?>"/>
		<input type="hidden" name="array" value="<?=$array?>"/>
        </form>
    </body>
</html>
