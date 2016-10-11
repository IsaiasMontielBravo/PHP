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
            $altura = $_GET['numero'];
            $piramide = $_GET["piramide"];
            $cont=0;
           
            
            for ($i = 0; $i < $altura; $i++) { 
            for ($j = 0; $j < $altura - $i - 1; $j++) echo '&nbsp'; 
            for ($j = 0; $j <= $i; $j++) echo $piramide; 
            echo '<br />'; 
                        }
	}
                    
            
            
        ?>
    </body>
</html>
