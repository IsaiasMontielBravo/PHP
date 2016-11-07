



<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        </style>
        
    </head>
    <body>
        <p>Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
		Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra
		en español y dará la correspondiente traducción en inglés.
		</p>
        <?php
            $diccionario = array("Uno" => "One",
                                 "Dos" => "Two",
                                 "Tres" => "Three",
                                 "Cuatro" => "Four",
                                 "Cinco" => "Five",
                                 "Seis" => "Six",
                                 "Siete" => "Seven",
                                 "Ocho" => "Eight",
                                 "Nueve" => "Nine",
                                 "Diez" => "Ten",
                                 "Once" => "Eleven",
                                 "Doce" => "Twelve",
                                 "Trece" => "Thirteen",
                                 "Catorce" => "Fourteen",
                                 "Quince" => "Fifteen",
                                 "Dieciseis" => "Sixteen",
                                 "Diecisiete" => "Seventeen",
                                 "Dieciocho" => "Eighteen",
                                 "Diecinueve" => "Nineteen",
                                 "Veinte" => "Twenty");
        ?>
        <form action="#" method="get">
            Español: <select name="palabra">
                <?php
                    foreach ($diccionario as $esp => $ing) {
                        echo "<option value=\"$esp\">$esp</option>";
                    }
                    
                    $palabra = $_GET['palabra'];
                ?>
            </select>
            <input type="submit" value="Traducir">
            <?php
                if (isset($palabra)) {
                    echo "<br><p style=\"margin-top:30px\">Español: "
                                       . "$palabra - Inglés: "
                                       . "$diccionario[$palabra]</p>";
                }
            ?>
        </form>
    </body>
</html>