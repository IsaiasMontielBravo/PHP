<?php
    session_start(); // Inicio de sesión
    
    if(!isset($_SESSION['cantidadNumeros'])) {
        $_SESSION['cantidadNumeros'] = 0;
        $_SESSION['total'] = 0;
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios 1</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
        <p>Escribe un programa que calcule la media de un conjunto de números 
           positivos introducidos por teclado. A priori, el programa no sabe 
           cuántos números se introducirán. El usuario indicará que ha terminado
           de introducir los datos cuando meta un número negativo. Utiliza 
           sesiones.</p>
        <?php
            $numero = $_GET['numero'];
            
            if (!isset($numero) || $numero >= 0) {
            
                if (isset($numero)) {
                    $_SESSION['cantidadNumeros']++;
                }
                $_SESSION['total'] += $numero;
        ?>
        <form action="#" method="get">
            Introduzca un número: <input type="number" name="numero" autofocus="">
            <input type="submit" value="Introducir">
        </form>
        <?php
            } else {
        ?>
            <p>La media de los números introducidos es: 
            <?= $_SESSION['total']/$_SESSION['cantidadNumeros']?></p>
        <?php
            }
        ?>
    </body>
</html>