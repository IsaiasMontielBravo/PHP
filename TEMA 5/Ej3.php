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
        

        $num = $_GET['numero'];
        $totalNumero = $_GET['totalNumeros'];
        $numeroTexto = $_GET['numeroTexto'];
        
        if (!isset($num)){
            $totalNumero = 0;
            $numeroTExto = "";
            
        }
        if($totalNumero == 15){
            $numeroTexto = $numeroTexto . "-" . $num;
            $numeroTexto = substr($numeroTexto,2);

            $num = explode("-", $numeroTexto);
            echo "Array original: <table><tr>";
            
            foreach ($num as $n){
                echo "<td" . $n . "<td>";
            }
            
            echo "</tr><table>";
            
            echo array_reverse($num);
            
            echo "</tr></table>";
            }
            
            if (($totalNumero < 15)|| (!isset($num))){
                ?>
                
        <form action="#" method="get">
            <p>Introduzca un numero :</p>
            <input type="number" name="numero" autofocus>
            <input type="hidden" name="totalNumeros" value=" <?= ++$totalNumeros ?>">
            <input type="hidden" name="numeroTexto" value="<?= $numeroTexto - "-" . $num ?>">
            <input type="submit" value="ok">
        </form>
        <?php
            }
        ?>
    </body>
</html>
