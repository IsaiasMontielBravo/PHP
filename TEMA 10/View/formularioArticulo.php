<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Tema 10</title>
    </head>
    <body>
        
         <div class="container">
            <div class="jumbotron">
        <h1>Nuevo Articulo</h1>
         
        <br>
            <form action="../Controller/grabaArticulo.php"  enctype="multipart/form-data" method="POST">
                
                    <label>Título</label>
                    <input class="form-control" type="text" size="30" name="titulo">
                    <label>Contenido</label>
                    <textarea class="form-control" name="contenido" cols="60" rows="6"></textarea>
                
            <input class="btn btn-default" type="submit" value="Aceptar">
          </form>
      </div>
      </div>
    </body>
</html>
