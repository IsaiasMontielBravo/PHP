<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 12</title>
        <style>
            table#resultados,table#resultados tr,table#resultados td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            table#resultados td {
                padding: 5px;
                width: 50px;
                text-align: center;
            }
            td.fallo {
                color: red;
            }
            td.acierto {
                color: green;
            }
        </style>
    </head>
    <body>
        <h1>Ejercicio 12</h1>
        <p>Realiza un programa que escoja al azar 5 palabras en español del 
           mini-diccionario del ejercicio anterior. El programa pedirá que el 
           usuario teclee la traducción al inglés de cada una de las palabras y 
           comprobará si son correctas. Al final, el programa deberá mostrar 
           cuántas respuestas son válidas y cuántas erróneas.</p>
        <?php
            $palabras = ["One", "Two", "Three", "Four", "Five", "Six", "Seven",
                        "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen",
                        "Fourteen", "Fifteen", "Sixteen", "Seventeen",
                        "Eighteen", "Nineteen", "Twenty"];
            
            $diccionario = array("One" => "Uno" ,
                                 "Two" => "Dos",
                                 "Three" => "Tres",
                                 "Four" => "Cuatro",
                                 "Five" => "Cinco",
                                 "Six" => "Seis",
                                 "Seven" => "Siete",
                                 "Eight" => "Ocho",
                                 "Nine" => "Nueve",
                                 "Ten" => "Diez",
                                 "Eleven" => "Once",
                                 "Twelve" => "Doce",
                                 "Thirteen" => "Trece",
                                 "Fourteen" => "Catorce",
                                 "Fifteen" => "Quince",
                                 "Sixteen" => "Dieciseis",
                                 "Seventeen" => "Diecisiete",
                                 "Eighteen" => "Dieciocho",
                                 "Nineteen" => "Diecinueve",
                                 "Twenty" => "Veinte");
            
            $palabrasAAdivinar = [];
            
            $palabra1 = $_GET['palabra1'];
            $palabra2 = $_GET['palabra2'];
            $palabra3 = $_GET['palabra3'];
            $palabra4 = $_GET['palabra4'];
            $palabra5 = $_GET['palabra5'];
            $palabra6 = $_GET['palabra6'];
            $palabra7 = $_GET['palabra7'];
            $palabra8 = $_GET['palabra8'];
            $palabra9 = $_GET['palabra9'];
            $palabra10 = $_GET['palabra10'];
        
        if (!isset($palabra1)) {
        ?>
            <form action="#" method="get">
                <table>
                    <?php
                        for ($i = 0; $i < 10; $i++) {
                            do {
                                $palabra = rand(0, 19);
                            } while (in_array($palabra, $palabrasAAdivinar));
                            $palabrasAAdivinar = $palabra;
                            $textoPalabras .= "-" . $palabra;
                            
                            echo "<tr><td>" . $diccionario[$palabras[$palabra]] 
                                . "</td><td><input type=\"text\" name=\"palabra$i\""
                                . "required></td></tr>";
                        }
                    ?>
                    <tr><td><input type="hidden" name="textoPalabras"
                                   value="<?= $textoPalabras?>">
                                    </td></tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="submit" value="Comprobar"></td>
                    </tr>
                </table>
            </form>
        <?php
            } else {
                
                $textoPalabras = $_GET['textoPalabras'];
                
                $palabrasAAdivinar = explode("-", $textoPalabras);
                
                for ($i = 0; $i < 10; $i++) {
                    $respuestas[] = $_GET['palabra'.$i];
                }
        ?>
        <table id="resultados">
            <?php
                    $clase = "acierto";
                    $aciertos = 0;
                    
                    for ($i = 0; $i < 10; $i++) {
                        if (strcasecmp($diccionario[$respuestas[$i]], 
                            $diccionario[$palabras[$palabrasAAdivinar[$i + 1]]]) == 0) {
                            $clase = "acierto";
                            $aciertos++;
                        } else {
                            $clase = "fallo";
                        }
                        
                        echo "<tr><td class=\"$clase\">" . 
                                $diccionario[$palabras[$palabrasAAdivinar[$i + 1]]]
                                    . "</td>";
                        echo "<td class=\"$clase\">$respuestas[$i]</td></tr>";
                    }
            ?>
        </table>
            <h1><?= $aciertos?> Aciertos</h1>
        <?php
            }
        ?>
    </body>
</html>