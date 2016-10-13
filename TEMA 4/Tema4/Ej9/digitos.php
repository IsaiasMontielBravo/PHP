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
        $n = 0;
        do{
                $numero = floor($numero / 10);
                $n = $n + 1;
        } while ($numero > 0);
        echo " Tu numero tiene " . $n . " digitos";
        ?>
    </body>
</html>
