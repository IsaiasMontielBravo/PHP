<?php
/**
 * Clase blogArticulo, en este clase tendremos todo lo relacionado con la carga y
 * obtencion de datos de los articulos del post en la base de datos.
 *
 * @author Junior Miguel Castillo Santana
 */
require_once "blogBD.php";
class Articulo {
    
    // Atributos del articulo
    private $id;
    private $titulo;
    private $contenido;
    private $fecha;
    private $fechaEdicion;
    private $editado;
    
    // Funcion constructor que inicializa los atributos
    public function __construct($titulo,$fecha, $contenido = "", $id = null, $editado = false, $fechaEdicion = null) {
        $this->titulo = $titulo;
        $this->contenido = $categoria;
        $this->fecha = $fecha;
        $this->id = $id;
        $this->fechaEdicion = $fechaEdicion;
        $this->editado = $editado;
        
    }
    
    // Funcion getId
    public function getId() {
        return $this->id;
    }
    
    // Funcion getTitulo
    public function getTitulo() {
        return $this->titulo;
    }
    
    // Funcion getFecha
    public function getFecha() {
        return $this->fecha;
    }
    
    // Funcion getCategoria
    public function getContenido() {
        return $this->categoria;
    }
    
    public function getFechaEdicion() {
        return $this->fechaEdicion;
    }
    public function getEditado() {
        return $this->editado;
    }
        
    // Funcion setter para modificar todos los atributos. En caso de que haya alguno que no se quiera
    // modificar simplemente se deja en blanco con comillas
    public function setter($titulo="",$fecha="", $contenido="") {
        
        // Si el titulo no esta vacio ni es nulo, se lo asignamos como atributo
        if ($titulo !== "" && $titulo !== null) {
            $this->titulo = $titulo;
        }
        
        // Si el titulo no esta vacio ni es nulo, se lo asignamos como atributo
        if ($fecha !== "" && $fecha !== null) {
            $this->fecha = $fecha;
        }
        
        // Si la categoria no esta vacio ni es nulo, se lo asignamos como atributo
        if ($contenido !== "" && $contenido !== null) {
            $this->categoria = $contenido;
        }
        
    }
    
    // Funcion insert que inserta un nuevo objeto a la base de datos
    public function insert() {
        // Establecemos conexion con la BD
        $conexion = blogDB::ConnectDB();
        
        // Sentencia Insert
        $insert = "INSERT INTO articulos (titulo, articulo, autor, fecha, categoria) VALUES (\"".
          "$this->titulo\",STR_TO_DATE(\"$this->fecha\", '%d-%m-%Y %H:%i:%s'),".
          "\"$this->contenido\")";
        
        // Ejecutamos la sentencia
        $conexion->exec($insert);
    }
    
    // Funcion delete que borra el objeto en la base de datos
    public function delete() {
        // Establecemos conexion con la BD
        $conexion = blogDB::connectDB();
        
        // Sentencia para borrar el objeto
        $borrado = "DELETE FROM articulos WHERE id=\"".$this->id."\"";
        
        // Ejecutamos la sentencia
        $conexion->exec($borrado);
    }
    
    // Funcion delete que modifica el objeto en la base de datos
    public function update() {
        // Establecemos conexion con la BD
        $conexion = blogDB::connectDB();
        
        // Sentencia para modificar el objeto
        $update = "UPDATE articulos SET titulo=\"$this->titulo\", , fechaEdicion=STR_TO_DATE(\"$this->fecha\", '%d-%m-%Y %H:%i:%s'), contenido=\"$this->contenido\", editado=true  WHERE id=\"$this->id\"";
        
        // Ejecutamos la sentencia
        $return = $conexion->query($update);
    }
    
    // Funcion estatica de clase para seleccionar todos los articulos de la tabla devuelve un array de objetos
    public static function getArticulos($filtro, $valor) {
        
    // Conectamos a la BD
    $conexion = blogDB::connectDB();
    
    // Si Categoria viene vacia
    if ($filtro !== "" && $valor !== "") {
        // Sentencia Select
        $seleccion = "SELECT * FROM articulos WHERE $filtro LIKE '$valor' ORDER BY fecha DESC";
        
    } else {
        // Sentencia Select
        $seleccion = "SELECT * FROM articulos ORDER BY fecha DESC";
    }
    
    // Ejecutamos el Select con query (que devuelve los datos, exec solo devuelve filas afectadas)
    $consulta = $conexion->query($seleccion);
    
    // Inicializamos $articulos como array antes del While para evitar error
    $articulos = [];
    
    // Recorremos todos los registros
    while ($registro = $consulta->fetchObject()) {
      // Creamos objetos y los metemos en el array articulos
      $articulos[] = new Articulo($registro->titulo, $registro->articulo, $registro->autor, 
        $registro->fecha, $registro->categoria, $registro->id, $registro->editado, $registro->fechaEdicion);
    }
    
    // Devolvemos el array articulos
    return $articulos;    
  }
  
  // Funcion estatica de clase para seleccionar un articulo por su ID, devuelve un objeto
  public static function getArticuloById($id) {
    // Conectamos a la BD
    $conexion = blogDB::connectDB();
    
    // Sentencia Select
    $seleccion = "SELECT id, titulo, articulo, autor, fecha, categoria FROM articulos WHERE id=$id";
    
    // Ejecutamos la sentencia SELECT
    $consulta = $conexion->query($seleccion);
    
    // Convertimos en objeto la fila recibida
    $registro = $consulta->fetchObject();
    
    // Guardamos el articulo
    $articulos = new Articulo($registro->titulo, $registro->articulo, $registro->autor, 
        $registro->fecha, $registro->categoria, $registro->id);
       
    // Devolvemos el array articulos
    return $articulos;   
  }
    
}

