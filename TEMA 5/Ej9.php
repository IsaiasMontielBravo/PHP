<!DOCTYPE html>
<!--
Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
continuación se mostrará el contenido de ese array junto al índice (0 – 9). Seguidamente el programa
pedirá dos posiciones a las que llamaremos “inicial” y “final”. Se debe comprobar que inicial es
menor que final y que ambos números están entre 0 y 9. El programa deberá colocar el número de
la posición inicial en la posición final, rotando el resto de números para que no se pierda ninguno.
Al final se debe mostrar el array resultante.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      table, td{
        border: 1px solid black;
        border-collapse: collapse;
      }
      td{
        padding: 10px;
      }
    </style>
    
  </head>
  <body>
   <?php
    if(isset($_GET['numerosEnviados'])){
                $numerosEnviados = $_GET['numerosEnviados'];
                $numerosEnviados++;      
                if($numerosEnviados<10) {
                    $numIntroducido = $_GET['numIntroducido'];
                    $cadenaNumero = $_GET['cadenaNumero']." ".$numIntroducido;
                } else {
                    $numIntroducido = $_GET['numIntroducido'];
                    $cadenaNumero = $_GET['cadenaNumero']." ".$numIntroducido;
                    $noMasNumeros = true;
                    //Lo muestra
                    echo "Array original: ";
                    echo "<br>";
                    for($x = 0; $x < 10; $x++){
                        echo "$x"." ";
                    }
                    echo "<br>---------------------------------<br>";
                    echo "$cadenaNumero";
                }
            } else {
                $numerosEnviados = 0;
                $cadenaNumero = "";
                $noMasNumeros = false;
            }                     
        ?>
        <?php if(!$noMasNumeros){        
        ?>
        <form method="get" action="Ej9.php">
            <input type="number" name="numIntroducido">
            <input type="hidden" name="cadenaNumero" value=<?php echo "\"$cadenaNumero\""; ?>>
            <input type="hidden" name="numerosEnviados" value= <?php echo "\"$numerosEnviados\""; ?>>
            <input type="submit" value="Enviar número">
        </form>
        <?php
        } else {
        ?>
        <form method="get" action="Ej9p2.php">
            Coloque la posicion inicial: 
            <input type="number" name="valorInicial"><br>
            Coloque la posicion final:
            <input type="number" name="valorFinal"><br>
            <input type="hidden" name="cadenaNumero" value=<?php echo "\"$cadenaNumero\""; ?>>
            <input type="submit" value="Enviar número">
        </form>
       <?php
        }
       ?>
    </body>
</html>