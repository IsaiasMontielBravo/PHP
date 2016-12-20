<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Vehículos</title>
    </head>
    <body>
         <?php
		 include_once 'Bicicleta.php';
		 include_once 'Coche.php';
                 
			 $miBici = new Bicicleta("15");
			 
			 // crea un coche con 1900cc de cilindrada
			 $miCoche = new Coche(1600);
			 
			 $miBici->recorre(60);
			 $miCoche->recorre(400);
			 echo $miBici->invertido()."<br>";
			 echo $miCoche->arrancar()."<br>";
			 $miBici->recorre(80);
			 echo "Mi bici ha recorrido ".$miBici->getKmRecorridos()." Km<br>";
			 echo "Mi coche ha recorrido ".$miCoche->getKmRecorridos()." Km<br>";
			 echo "Se han creado un total de ".Vehiculo::getVehiculosCreados()." vehículos<br>";
			 echo "Todos los vehículos han hecho un total de ".Vehiculo::getKmTotales()." Km<br>";
		?>
    </body>
</html>
