<?php
error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
session_start();// Inicia la sesión
//inicializa el carrito a cero
if(!isset($_SESSION['carrito'])){
  $_SESSION['carrito'] = ["baquetas de punta de madera" => 0, "sillin de cuero" => 0, "Bateria Mapex" => 0, "Set de platos Sabian" => 0];
}
?>
<!DOCTYPE html>
<!--
Ejercicio 5
Crea una tienda on-line sencilla con un catálogo de productos y un carrito de la compra. Un
catálogo de cuatro o cinco productos será suficiente. De cada producto se debe conocer al menos
la descripción y el precio. Todos los productos deben tener una imagen que los identifique. Al lado
de cada producto del catálogo deberá aparecer un botón Comprar que permita añadirlo al carrito.
Si el usuario hace clic en el botón Comprar de un producto que ya estaba en el carrito, se deberá
incrementar el número de unidades de dicho producto. Para cada producto que aparece en el carrito,
habrá un botón Eliminar por si el usuario se arrepiente y quiere quitar un producto concreto del
carrito de la compra. A continuación se muestra una captura de pantalla de una posible solución.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      body{
        background-color: grey;
      }
      #nombreTienda{
        text-align: center;
        background-color: white;
        width: 400px;
        height: 50px;
        margin: 0 auto;
        border-radius: 50px;
        box-shadow: 2px 2px 5px 2px grey;
      }
      
      #contenedor{
        margin: 0px auto;
	width:90%;
	background-color: white;
	margin-top:50px;
	margin-bottom:30px;
        margin-left: 60px;
	box-shadow: 5px 5px 5px #737373;
	border-radius:10px;
        position: absolute;
      }
      
      #articulos tr td h3 {
        border-bottom: 2px solid black;
        text-align: center;       
      }
      
      #articulos{
        margin-left: 100px;
        float: left;
      }
      
      #imagenes {
        margin: 0 auto;
        margin: 10px;
      }
      #carrito{
        margin-right: 100px;
        float: right;
      }
      #carrito tr td{
        width: 250px;
      }
      #carrito tr td h3 {
        border-bottom: 2px solid black;
        text-align: center;       
      }
    </style>
  </head>
  <body>
 <?php
    //array con los datos de los articulos
    if(!isset($_SESSION['articulos'])){
      $_SESSION['articulos'] = [ 
        "baquetas" => [ 
          "precio" => 5, 
          "imagen" => "baqueta.png", 
          "nombre" => "Baquetas de Madera", 
          "Detalles" => "<b>Baquetas de madera</b> "
          ],
        "sillin" => [
            "precio" => 150, 
            "imagen" => "sillin.jpg", 
            "nombre" => "sillin de cuero",
            "Detalles" => "<b>Sillin de Cuero</b> Wasdasdasdasdwqqw"
            ],
        "bateria" => [ 
            "precio" => 1200, 
            "imagen" => "bateria.jpg", 
            "nombre" => "Bateria Mapex",
            "Detalles" => "<b>Bateria Mapex Saturn</b>"
            ],
        "sabian" => [ 
            "precio" => 600, 
            "imagen" => "sabian.jpg",
            "nombre" => "Sabian HHX",
            "Detalles" => "<b>Platillos Sabian</b>"]
      ];
    }
    
    $articulos = $_SESSION['articulos'];
    ?>        
    <div id="nombreTienda">
      <h1>La Camisetilla</h1>
    </div>
    <div id="contenedor"> 
      <!--muestra articulos-->
      <table id="articulos">
        <tr>
          <td colspan="4"><h3><img src="imagenes/titulo.png" width="200px;"></h3></td>
        </tr>
        <tr>
        <?php
        $conta = 0;
        foreach ($articulos as $clave => $elemento) {
        ?>
          
          <td>
            <?php
            if($conta ==3){
              echo '<p style="clear:both"></p>';
            }
            $conta++;
            ?>
            <div id="imagenes">
              <img src="imagenes/<?=$elemento['imagen']?>" width="160px" border="1">
            <div><br>
            <?=$elemento['nombre']?> </br> Precio: <?=$elemento['precio']?> €</br>
            <div class="formularios">
              <form action="carritoDeLaCompra_Detalles.php" method="GET" >
                <input type="hidden" name="codigo" value="<?=$clave?>">
                <input type="hidden" name="accion" value="detalles">
                <input type="submit" value="Detalles" class="botonDetalles">
              </form>
            </div>
            <div class="formularios">
              <form action="carritoDeLaCompra.php" method="GET">
                <input type="hidden" name="codigo" value="<?= $clave?>">
                <input type="hidden" name="accion" value="comprar">
                <input type="submit" value="comprar" class="botonComprar">
              </form>
            </div>
          </td>
          
        <?php
        }
        ?>
        </tr>
      </table>
      <!-- -------------------------------------------------- -->

      <!--carrito de la compra -->
      <?php
      $codigo = $_GET['codigo'];
      $accion = $_GET['accion'];
      
     
      if($accion == "comprar"){
        $_SESSION['carrito'][$codigo]++;
      }
      
      if($accion == "eliminar"){
        $_SESSION['carrito'][$codigo] = 0;
      }
      $total = 0;
      ?>
      <table id="carrito">
        <tr>
          <td colspan="4"><h3> <img src="imagenes/carrito.png" width="20px;"> Carrito</h3></td>
        </tr>

        <?php
        foreach ($articulos as $codigo => $elemento) {
          if($_SESSION['carrito'][$codigo] > 0){
            $total = $total + ($_SESSION['carrito'][$codigo] * $elemento['precio']);
        ?>
          <tr>
            <td>
              <div id="imagenes">
                Cantidad: <?php echo $_SESSION['carrito'][$codigo]; ?></br>
                <img src="imagenes/<?=$elemento['imagen']?>" width="160px" border="1">
              <div><br>
              <?=$elemento['nombre']?> </br> Precio: <?=$elemento['precio']?> €</br>
              <form action="carritoDeLaCompra.php" method="GET">
                <input type="hidden" name="codigo" value="<?=$codigo?>">
                <input type="hidden" name="accion" value="eliminar">
                <input type="submit" value="Eliminar"class="botonEliminar">
              </form>
            </td>
          </tr>
        <?php
          }
        }
        ?>
          <tr>
            <td><p>Total: <?php echo $total; ?> €</p></td>
          </tr>
      </table>
      <!-- -------------------------------------------------- -->
    </div>
  </body>
</html>
