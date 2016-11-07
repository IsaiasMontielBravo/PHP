<?php
    session_start(); // Inicio de sesión
    
    if(!isset($_SESSION['cantidadNumeros'])) {
        $_SESSION['cantidadNumeros'] = 0;
        $_SESSION['cantidadImpares'] = 0;
        $_SESSION['totalImpares'] = 0;
        $_SESSION['mayorPar'] = 0;
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <h1>Ejercicio 2</h1>
        <p>Realiza un programa que vaya pidiendo números hasta que se introduzca 
           un numero negativo y nos diga cuantos números se han introducido, la 
           media de los impares y el mayor de los pares. El número negativo sólo 
           se utiliza para indicar el final de la introducción de datos pero no 
           se incluye en el cómputo. Utiliza sesiones.</p>
        <?php
            $numero = $_GET['numero'];
            
            if(!isset($numero) || $numero >= 0) {
                
                if ($numero % 2 == 0) {
                    if ($numero > $_SESSION['mayorPar']) {
                        $_SESSION['mayorPar'] = $numero;
                    }
                } else {
                    $_SESSION['totalImpares'] += $numero;
                    $_SESSION['cantidadImpares']++;
                }
                
                $_SESSION['cantidadNumeros']++;
            
        ?>
        <form action="#" method="get">
            Introduzca un número: 
            <input type="number" name="numero" autofocus>
            <input type="submit" value="Introducir">
        </form>
        <?php
            } else {
        ?>
        <p>Total de números introducidos: <?= $_SESSION['cantidadNumeros']?></p>
        <p>Media de los números impares: 
                <?= $_SESSION['totalImpares']/$_SESSION['cantidadImpares']?></p>
        <p>Mayor de los pares: <?= $_SESSION['mayorPar']?></p>
        <?php
            }
        ?>
    </body>
</html>
