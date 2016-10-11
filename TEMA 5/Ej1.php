<!DOCTYPE html>
<!--
Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
los tres arrays dispuesto en tres columnas.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        for ($i = 0; $i < 20; $i++) {
        // números aleatorios entre 0 y 10 (ambos incluidos)
        $n[$i] = rand(0, 101);
            }
        echo "Numeros aleatorios:";
        foreach ($n as $numero) {
        echo  $numero, ",";
        }
        echo "<br>";
        
        $cuadrado = $numero * $numero;
        
        $cubo = $numero * $numero * $numero;
       echo  "numeros al cuadrado:";
        foreach ($n as $numero) {
            echo  $cuadrado , ", ";
        }
        echo "<br>";
       echo "numeros al cubo:";
        foreach ($n as $numero) {
            echo $cubo , ", ";
        }
        
        ?>
    </body>
</html>
