<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $moneda = $_GET['moneda'];
         $cantidad = $_GET['cantidad'];
            
            if($cantidad>0){
                if($moneda=='euros'){
                    $res = $cantidad*166.38;
                    $resultado[] = [
                        'moneda' => 'pesetas',
                        'cantidad'=> $res
                    ];
                    echo json_encode($resultado);
                } else if($moneda=='pesetas'){
                    $res = $cantidad/166.38;
                    $resultado[] = [
                        'moneda' => 'euros',
                        'cantidad'=> $res
                    ];
                    echo json_encode($resultado);
                } else{
                    echo "El tipo de moneda ingresado es incorrecto.";
                }
            } else {
                echo "Cantidad incorrecta.";
            }
        ?>
    </body>
</html>
