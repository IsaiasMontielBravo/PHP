
<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Ejercicio</title>
    </head>
    <body>

        <h1>Modificacion De Articulo</h1>
        <br>
        <div class="container">
            <form action="modificaArticulo.php" method="post">
                <input type="hidden" name="codigo" value="<?=$_SESSION['codigo']?>">
                <div class="form-control">
                <label>Título</label>
                <input class="form-control" type="text" size="30" name="titulo" value="<?=$_SESSION['titulo']?>">
                </div>
                <div class="form-group">
                <label>Contenido</label>
                <textarea class="form-control" name="contenido" cols="60" rows="6"><?=$_SESSION['contenido']?></textarea>
                </div>
                <p><input class="btn btn-default" type="submit" value="Submit"></p>
            </form>
        </div>
    </body>
</html>