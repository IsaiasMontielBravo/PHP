<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 14</title>
        <style>
            table, tr, td {
                border-collapse: collapse;
            }
            table {
                margin: auto;
            }
            tr, td, th {
                width: 50px;
                height: 50px;
            }
            th {
                background-image: url("images/textura_madera.jpg");
            }
            td {
                color: red;
                text-align: center;
            }
            td.blanco {
                background-image: url("images/blanco.jpg");
            }
            td.negro {
                background-image: url("images/negro.jpg");
            }
            td.blancoPunto {
                background-image: url("images/blanco_punto.jpg");
                background-size: 100% 100%;
            }
            td.negroPunto {
                background-image: url("images/negro_punto.jpg");
                background-size: 100% 100%;
            }
            td.alfilBlanco {
                background-image: url("images/alfil_blanco.jpg");
                background-size: 100% 100%;
            }
            td.alfilNegro{
                background-image: url("images/alfil_negro.jpg");
                background-size: 100% 100%;
            }
            form {
                text-align: center;
                padding: 10px;
                width: 100%;
                margin-top: 20px;
                margin-bottom: 20px;
                background-color: #c3c3c3;
            }
            form input[type='text'] {
                width: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Ejercicio 14</h1>
        <p>Escribe un programa que, dada una posición en un tablero de ajedrez, 
           nos diga a qué casillas podría saltar un alfil que se encuentra en 
           esa posición. Indícalo de forma gráfica sobre el tablero con un color 
           diferente para estas casillas donde puede saltar la figura. El alfil 
           se mueve siempre en diagonal. El tablero cuenta con 64 casillas. Las 
           columnas se indican con las letras de la “a” a la “h” y las filas se
           indican del 1 al 8.</p>
        <?php
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
        <form action="#" method="get">
            Introduzca la posición del alfil: <input type="text" name="posicion">
            <input type="submit" value="Colocar">
        </form>
        <table>
            <?php
            
                $cuadrado = "negro";
                $pos = $_GET['posicion'];
                
                $posX = abs(9 - substr($pos, 1, 1));
                $posY = (ord(substr($pos, 0, 1)) - ord('A')) + 1;
            
                for($i = 0; $i < 10; $i++) {
                    
                    echo "<tr>";
                    
                    for($j = 0; $j < 10; $j++) {
                        if ($i == 0 || $i == 9 || $j == 0 || $j == 9) {
                            if (($i == 0 || $i == 9) && ($j > 0 && $j < 9)) {
                                echo "<th>" . chr($j + 64) . "</th>";
                            } else if (($j == 0 || $j == 9) && 
                                        ($i != 0 && $i != 9)) {
                                echo "<th>" . (9 - $i) . "</th>";
                            } else {
                                echo "<th></th>";
                            }
                            
                        } else if ($i == $posX && $j == $posY){
                            
                            if ($cuadrado == "blanco") {
                                echo "<td class=\"alfilBlanco\"></td>";
                                $cuadrado = "negro";
                            } else {
                                echo "<td class=\"alfilNegro\"></td>";
                                $cuadrado = "blanco";
                            }
                            
                        } else if (abs((abs($i) - abs($posX))) == 
                                        abs((abs($j) - abs($posY))) &&
                                        (isset($posX) && isset($posY))) { 
                            
                            if ($cuadrado == "blanco") {
                                echo "<td class=\"blancoPunto\"></td>";
                                $cuadrado = "negro";
                            } else {
                                echo "<td class=\"negroPunto\"></td>";
                                $cuadrado = "blanco";
                            }
                        
                        }else {
                            echo "<td class=\"$cuadrado\"></td>";
                            
                            if ($cuadrado == "blanco") {
                                $cuadrado = "negro";
                            } else {
                                $cuadrado = "blanco";
                            }
                            
                        }
                    }
                    
                    if ($cuadrado == "blanco") {
                        $cuadrado = "negro";
                    } else {
                        $cuadrado = "blanco";
                    }
                    
                    echo "</tr>";
                    
                }
            ?>
        </table>
    </body>
</html>
