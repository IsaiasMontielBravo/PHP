<!DOCTYPE html>
<!--
Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado
año y que muestre a continuación un diagrama de barras horizontales con esos datos. Las barras
del diagrama se pueden dibujar a base de la concatenación de una imagen.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
        table {
                margin: auto;
            }
            td:first-child {
                text-align: right;
            }
            td.ultima {
                text-align: left;
            }
            input {
                width: 150px;
            }
            table#temperaturas th {
                padding: 5px;
            }
            table#temperaturas td {
                height: 10px;
                width: 20px;
            }
            table#temperaturas td.frio {
                border: 5px solid black;
                border-collapse: collapse;
                background-color: white;
            }
            table#temperaturas td.azul {
                border: 5px solid black;
                border-collapse: collapse;
                background-color: blue;
            }
            table#temperaturas td.morado {
                border: 5px solid black;
                border-collapse: collapse;
                background-color: purple;
            }
            table#temperaturas td.naranja {
                border: 5px solid black;
                border-collapse: collapse;
                background-color: orange;
            }
            table#temperaturas td.amarillo {
                border: 5px solid black;
                border-collapse: collapse;
                background-color: yellow;
            }
            table#temperaturas td.rojo {
                border: 5px solid black;
                border-collapse: collapse;
                background-color: red;
            }
        </style>
    </head>
    <body>
        <?php
            $enero = $_GET['enero'];
            $febrero = $_GET['febrero'];
            $marzo = $_GET['marzo'];
            $abril = $_GET['abril'];
            $mayo = $_GET['mayo'];
            $junio = $_GET['junio'];
            $julio = $_GET['julio'];
            $agosto = $_GET['agosto'];
            $septiembre = $_GET['septiembre'];
            $octubre = $_GET['octubre'];
            $noviembre = $_GET['noviembre'];
            $diciembre = $_GET['diciembre'];
            
             $valoresString = "$enero#$febrero#$marzo#$abril#$mayo#$junio"
                            . "#$julio#$agosto#$septiembre#$octubre#$noviembre"
                            . "#$diciembre";
             
            $temperaturas = explode("#", $valoresString);
            $temperaturaMaxima = max($temperaturas);
            $temperaturaMinima = min($temperaturas);
            
            if (!isset($enero) && !isset($febrero) && !isset($marzo) && !isset($abril)
            && !isset($mayo) && !isset($junio) && !isset($julio) && !isset($agosto)
            && !isset($septiembre) && !isset($octubre) && !isset($noviembre) 
            && !isset($diciembre)) {
                  
             }else {
                
                echo "<table id=\"temperaturas\">";
                echo "<tr>";
                echo "<th>ºC</th>";
                echo "</tr>";
                
         for ($i = $temperaturaMaxima; $i >= $temperaturaMinima; $i--) {
                    echo "<tr><td>$i</td>";
                    for ($j = 0; $j < count($temperaturas); $j++) {
                        if ($temperaturas[$j] >= $i) {
                            if ($i > 30) {
                                echo "<td class=\"rojo\"></td>";
                            } else if ($i > 20 && $i <= 30) {
                                echo "<td class=\"naranja\"></td>";
                            } else if ($i > 15 && $i <= 20) {
                                echo "<td class=\"amarillo\"></td>";
                            } 
                            else if ($i > 10 && $i <= 15) {
                                echo "<td class=\"blanco\"></td>";
                            } 
                            else if ($i > 5 && $i <= 10) {
                                echo "<td class=\"morado\"></td>";
                            } 
                            else if ($i <= 5) {
                                echo "<td class=\"azul\"></td>";
                            } 
                        } else {
                            echo "<td></td>";
                        }
                    }
                    echo "</tr>";
             
             }
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Ene</th>";
                echo "<th>Feb</th>";
                echo "<th>Mar</th>";
                echo "<th>Abr</th>";
                echo "<th>May</th>";
                echo "<th>Jun</th>";
                echo "<th>Jul</th>";
                echo "<th>Ago</th>";
                echo "<th>Sep</th>";
                echo "<th>Oct</th>";
                echo "<th>Nov</th>";
                echo "<th>Dic</th>";
                echo "</tr>";
                
                echo "</table>";
         }
                
        ?>
        
    </body>
</html>
