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
            $totalNumeros = $_GET['totalNumeros'];
            $numeroTexto = $_GET['numeroTexto'];
            
            echo $totalNumeros;
            
            if(!isset($numero)){
                $totalNumeros = 0;
                $numeroTexto = "";
            }
            
            if ($totalNumeros == 8){
                $numeroTexto = $numeroTexto . "-" . $numero;
                $numeroTexto = substr($numeroTexto,2);
                
                $num = explode("-", $numeroTexto);
                
                foreach ($numero as $n){
                    if ($n % 2 ==0){
                        echo "<span style=\"color:green\">$n</span>";
                    } else {
                        echo "<span style=\"color:red\">$n</span>";
                    }
                    $totalNumero ++;
                }
                
            }
            if (($totalNumeros < 8) || (!isset($numero))) {
        ?>
            <form action="#" method="get">
                <p>Introduzca un número: </p>
                <input type="number" name="numero" autofocus>
                <input type="hidden" name="totalNumeros" 
                       value="<?= ++$totalNumeros ?>">
                <input type="hidden" name="numeroTexto" 
                       value="<?= $numeroTexto . "-" . $num ?>">
                <input type="submit" value="Introducir">
            </form>
        <?php
        echo $totalNumeros;
        
            }
        ?>
       
    </body>
</html>
