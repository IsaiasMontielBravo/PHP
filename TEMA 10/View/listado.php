<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Ejercicio </title>
    </head>
    <body>
        <div class="container">
            <table class="jumbotron">
        <h1>Super Blog</h1>
        <h4><a href="../Controller/nuevoArticulo.php">Nuevo articulo</a></h4>
        <hr>
            </table>
        </div>
                
        <?php
          foreach($data['articulos'] as $articulo)  {
          ?>
        <div class="container">
            <table class="jumbotron">
                <tr>
                    <th><?=$articulo->getTitulo()?></th>
                </tr>
                <tr>
                    <td><?=$articulo->getFecha()?></td>
                </tr>
                <tr>
                    <td><?=$articulo->getContenido()?></td>
                </tr>
                <tr>
                    <td>
                        <form action="../controller/modificarArticulo.php" method="POST">
                            <input type="hidden" name="codigo" value="<?=$articulo->getCodigo()?>">
                            <input type="hidden" name="titulo" value="<?=$articulo->getTitulo()?>">
                            <input type="hidden" name="contenido" value="<?=$articulo->getContenido()?>">
                            <button class="btn btn-default" type="submit" name="accion" value="Modificar">Modificar</button>
                        </form>
                        <a href="../controller/borrarArticulo.php?codigo=<?=$articulo->getCodigo()?>">Borrar</a>
                    </td>
                </tr>
            </table>
        </div>
          <?php
          }
        ?>
    </body>
</html>