<?php
error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida


?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 13</title>
        <style>
            table, tr, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            table {
                margin: auto;
                margin-top: 50px;
            }
            td {
                padding: 10px; 
            }
            span#minimo {
                color: blue;
                font-weight: bold;
            }
            span.diagonal {
                color: green;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h1>Ejercicio 13</h1>
        <p>Rellena un array bidimensional de 6 filas por 9 columnas con números 
           enteros positivos comprendidos entre 100 y 999 (ambos incluidos). 
           Todos los números deben ser distintos, es decir, no se puede repetir 
           ninguno. Muestra a continuación por pantalla el contenido del array 
           de tal forma que se cumplan los siguientes requisitos:
            <ul>
                <li>Los números de las dos diagonales donde está el mínimo 
                    deben aparecer en color verde.</li>
                <li>El mínimo debe aparecer en color azul.</li>
                <li>El resto de números debe aparecer en color negro.</li>
            </ul>
        </p>
        <?php
            $numerosUtilizados = [];
            $minimo = PHP_INT_MAX;
            for ($i = 0; $i < 6; $i++) {
                for ($j = 0; $j < 9; $j++) {
                    do{
                        $numero = rand(100, 999);
                    }while (in_array($numero, $numerosUtilizados));
                    if ($numero < $minimo) {
                        $minimo = $numero;
                        $posX = $i;
                        $posY = $j;
                    }
                    $numerosUtilizados = $numero;
                    $arrayBiDi[$i][$j] = $numero;                    
                }
            }
        ?>
        <table>
            <tr>
                <?php
                    for ($i = 0; $i < 6; $i++) {
                        for ($j = 0; $j < 9; $j++) {
                            
                            if ($arrayBiDi[$i][$j] == $minimo) {
                                echo "<td><span id=\"minimo\">";
                                echo $arrayBiDi[$i][$j];
                                echo "</span></td>";
                            } else if (abs((abs($i) - abs($posX))) == 
                                        abs((abs($j) - abs($posY)))){
                                echo "<td><span class=\"diagonal\">";
                                echo $arrayBiDi[$i][$j];
                                echo "</span></td>";
                            } else {
                                echo "<td>" . $arrayBiDi[$i][$j] . "</td>";
                            }
                            
                        }
                        echo "</tr><tr>";
                    }
                ?>
            </tr>
        </table>
    </body>
</html>
