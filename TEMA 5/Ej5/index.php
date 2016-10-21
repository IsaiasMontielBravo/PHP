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
            table#temperaturas td.blanco {
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
       
        <form action="Ej5.php" method="get">
            <table>
                <tr>
                    <th colspan="3" style="text-align: center;">
                        Introduzca las temperaturas de cada mes</th>
                </tr>
                <tr>
                    <td>Enero:</td>
                    <td><input type="number" name="enero">ºC</td>
                </tr>
                <tr>
                    <td>Febrero:</td>
                    <td><input type="number" name="febrero">ºC</td>
                </tr>
                <tr>
                    <td>Marzo:</td>
                    <td><input type="number" name="marzo">ºC</td>
                </tr>
                <tr>
                    <td>Abril:</td>
                    <td><input type="number" name="abril">ºC</td>
                </tr>
                <tr>
                    <td>Mayo:</td>
                    <td><input type="number" name="mayo">ºC</td>
                </tr>
                <tr>
                    <td>Junio:</td>
                    <td><input type="number" name="junio">ºC</td>
                </tr>
                <tr>
                    <td>Julio:</td>
                    <td><input type="number" name="julio">ºC</td>
                </tr>
                <tr>
                    <td>Agosto:</td>
                    <td><input type="number" name="agosto">ºC</td>
                </tr>
                <tr>
                    <td>Septiembre:</td>
                    <td><input type="number" name="septiembre">ºC</td>
                </tr>
                <tr>
                    <td>Octubre:</td>
                    <td><input type="number" name="octubre">ºC</td>
                </tr>
                <tr>
                    <td>Noviembre:</td>
                    <td><input type="number" name="noviembre">ºC</td>
                </tr>
                <tr>
                    <td>Diciembre:</td>
                    <td><input type="number" name="diciembre">ºC</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; padding-top: 10px;">
                        <input type="submit" value="Ver gráfico"></td>
                </tr>
            </table>
        </form>
         
        
    </body>
</html>
