<?php
    session_start(); // Inicio de sesión
    
    if(!isset($_SESSION['contadorDeNumeros'])) {
        $_SESSION['totalAcumulado'] = 0;
        $_SESSION['contadorDeNumeros'] = 0;
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <h1>Ejercicio 3</h1>
        <p>Escribe un programa que permita ir introduciendo una serie 
           indeterminada de números mientras su suma no supere el valor 10000. 
           Cuando esto último ocurra, se debe mostrar el total acumulado, el 
           contador de los números introducidos y la media. Utiliza sesiones.</p>
        <?php
            $numero = $_GET['numero'];
            
            $_SESSION['totalAcumulado'] += $numero;
            
            if ($_SESSION['totalAcumulado'] <= 10000) {
            
                if (isset($numero)) {
                    $_SESSION['contadorDeNumeros']++;
                }
                echo $_SESSION['totalAcumulado'] . " " .$_SESSION['contadorDeNumeros'];
            
        ?>
        <form action="#" method="get">
            <input type="number" name="numero" autofocus>
            <input type="submit" value="Introducir">
        </form>
        <?php
            } else {
        ?>
        <table>
            <tr>
                <td>Total acumulado:</td>
                <td><?= $_SESSION['totalAcumulado']?></td>
            </tr>
            <tr>
                <td>Contador de números:</td>
                <td><?= $_SESSION['contadorDeNumeros']?></td>
            </tr>
            <tr>
                <td>Media:</td>
                <td>
                <?= $_SESSION['totalAcumulado']/$_SESSION['contadorDeNumeros']?>
                </td>
            </tr>
        </table>
        <?php
            }
        ?>
    </body>
</html>
