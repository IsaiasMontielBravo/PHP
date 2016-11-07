<?php
    session_start(); // Inicio de sesión
    
    if(!isset($_SESSION['sesionIniciada'])) {
        $_SESSION['sesionIniciada'] = false;
        $_SESSION['user'] = "";
        $_SESSION['pass'] = "";
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <h1>Ejercicio 4</h1>
        <p>Establece un control de acceso mediante nombre de usuario y 
           contraseña para cualquiera de los programas de la relación anterior. 
           La aplicación no nos dejará continuar hasta que iniciemos sesión con 
           un nombre de usuario y contraseña correctos.</p>
        <?php
            
            $user = $_POST['usuario'];
            $pass = $_POST['password'];
            $error = "";
        
            if (isset($user) && isset($pass)) {
                
                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $pass;
                
                if (($user == "arroyo") && ($pass == "1234")) {
                    echo '<meta http-equiv="refresh" content="0;url=../Ejercicio6/ejercicio6.php">';
                } else {
                    $error = '<tr><td colspan="2"><span style="color: red;">'
                            . 'Usuario o contraseña incorrectos</span></td></tr>';
                }
            }
            
        ?>
        <div id="contenedor">
            <form action="ejercicio4.php" method="post">
                <table id="datos">
                    <tr>
                        <td colspan="2" id="titulo">
                            <strong>LOGIN</strong>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="usuario" 
                                   placeholder="Usuario" autofocus></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" 
                                   placeholder="Contraseña"></td>
                    </tr>
                    <?= $error;?>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="submit" value="Login">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
