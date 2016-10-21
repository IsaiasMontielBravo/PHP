<!DOCTYPE html>
<!--
Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los
pares de un color y los impares de otro.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="colores.php" method="get">
                <p>Introduzca un número: </p>
                <input type="number" name="numero" autofocus>
                <input type="hidden" name="totalNumeros" 
                       value="<?= ++$totalNumeros ?>">
                <input type="hidden" name="numeroTexto" 
                       value="<?= $numeroTexto?>">
                <input type="submit" value="Introducir">
            </form>
      
    </body>
</html>
