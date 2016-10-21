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
        
        
        
        if(isset($_GET["nuevoNumero"])){
            $cadena=" ";
            $numeroModificacion = $_GET['numeroModificacion'];
            $nuevoNumero= $_GET['nuevoNumero'];
            $numeroTexto= $_GET['numeros'];
        
           
         
        $numeros = explode(" ", $numeroTexto);
            foreach ($numeros as $num) {
                if ($num == $numeroModificacion) {
                    echo "<span style=\"color: red;\"> $nuevoNumero </span>";
            
                }else {
                    echo $num . " ";
                
                }
             
            }
            echo "\">";
            echo "<p>";
            
            
        }else{
            $cadena=" ";
             for($i = 0;$i < 100; $i++ ){
                      $numero = rand(0,20);
                       $cadena .=$numero. " ";
                      echo $numero . " ";
                     
            }
            echo "entro";
            
        }
        ?>
<form method="get">
            <table>
                <tr>
                    <td>Número a modificar:</td>
                    <td><input type="number" name="numeroModificacion"></td>
                </tr>
                <tr>
                    <td>Nuevo número:</td>
                    <td><input type="number" name="nuevoNumero"></td>
                    <input type="hidden" name="numeros" value=<?=$cadena?>>
                </tr>
                <tr>
                    <td style="text-align: center; padding-top: 10px; 
                        padding-bottom: 20px;" colspan="2">
                    <input type="submit" value="Cambiar"></td>
                </tr>
            </table>       
    
</form>
 
    </body>
</html>
