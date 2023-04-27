<?php 

namespace App;

class Modelo
{
    //coneccion base de datos
    protected static $db;
    protected static $columnasDb = ['id', 'modelo', 'precio', 'descripcion', 'imagen'];

    public $id;
    public $precio;
    public $descripcion;
    public $modelo;
    public $imagen;
    protected static $errores = [];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->modelo = $args['modelo'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
    }

    public function guardar(){
        if (isset($this->id)){
            $this->actualizar();
        }else{
            $this->crear();
        }
    }
    public function crear()
    {

        //sanitizar los datos
        $this->sanitizarAtributos();

        $query = "INSERT INTO modelos (modelo, precio, descripcion, imagen) VALUES ('$this->modelo', '$this->precio', '$this->descripcion', '$this->imagen')";

        $resultado = self::$db->query($query);
    }

    public function actualizar(){
        $this->sanitizarAtributos();

        $query = "UPDATE modelos SET modelo = '$this->modelo', precio = '$this->precio', descripcion = '$this->descripcion', imagen = '$this->imagen' WHERE id = '" . self::$db->escape_string($this->id) . "' ";

        // $valores = [];
        // foreach($atributos as $key => $value) {
        //     $valores[] = "{$key}='{$value}'";
        // }


        // $query = "UPDATE modelos SET ";
        // $query .=  join(', ', $valores );
        // $query .= " WHERE id = '" . self::$db->escape_string($this->id) . "' ";
        // $query .= " LIMIT 1 "; 

        //debuguear($query, true);
        $resultado = self::$db->query($query);
        
        
        if($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin?resultado=2');
        }
    }


    //Definir la coneccion a la base de datos 
    public static function setDb($database)
    {
        //Modelo::$db;  UNA FORMA DE REFERIRSE A UNA CLASE
        self::$db = $database; // FORMA RECOMENDADA PARA REFERIRSE A LA CLASE DEL METODO
    }
    public function sanitizarAtributos()
    {
        $atributos = $this->atributos();
        $sanitizando = [];

        foreach ($atributos as $key => $value) {
            $sanitizando[$key] = self::$db->escape_string($value);
        }
    }
    public function setImagen($imagen)
    {
        //Elimina la imagen previa 
        if (isset($this->id)){
            //comprobar si existe el archivo
            $existeArchivo = file_exists(CARPETA_IMAGENES.$this->imagen);
            if($existeArchivo){
                unlink(CARPETA_IMAGENES . $this->imagen);
            }
        }
        //asignar al atributo de imagen el nombre de la imagen
        if ($imagen) {
            $this->imagen = $imagen;
        }
    }
    public function validar(){

        if (!$this->modelo) {
            self::$errores[] = "Deves añadir un modelo";
        }
        if (!$this->precio) {
            self::$errores[] = "Deves añadir un precio";
        }
        //debuguear(strlen($this->descripcion) + 1 . "ñalkshjdalkjsdñlkajkdñlkasjdñlakjdñlkasjdñlkajdslñkasjdlksñjaslkñdjalksñdlñkasjd");
        //debuguear((strlen($this->descripcion) + 1 < 50));
        if (strlen($this->descripcion) < 50) {
            self::$errores[]= "Deves añadir una descripcion y deve tener almenos 50 caracteres";
        }

        return self::$errores;
    } 

    public function eliminar(){
        
    }

    //identificar y unir la base de datos
    public function atributos()
    {
        $atributos = [];
        foreach (self::$columnasDb as $columna) {
            if ($columna === 'id')
                continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }
    public static function all(){
        $query = "SELECT * FROM modelos";
        $resultado = self::consultarSQL($query);

        return $resultado;
    }

    //buscar un registro por su id
    public static function find($id){
        $query = "SELECT * FROM modelos WHERE id = ${id}";
        // echo $query;
        $resultado = self::consultarSQL($query);
        return array_shift($resultado);
    }
    
    public static function consultarSQL($query){

        // consultar la base de datos
         $resultado = self::$db->query($query);
        //Iterar los resultados 
        $array = [];
        while ($registro = $resultado->fetch_assoc()){
            $array[] = self::crearObjeto($registro);
        }
        //Liberar la memoria 
        $resultado->free();
        //Retornar los resultados 
        return $array;
    }

    protected static function  crearObjeto($registro){
        $objeto = new self;

        foreach ($registro as $key => $value){
            if (property_exists($objeto, $key)){
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }

    //sincronizar el obgeto en memoria con los cambios realizados por el usuario
    public function  sincronizar($args =[]){
        foreach($args as $key => $value){
             if (property_exists($this, $key) && !is_null($value)){
                 $this->$key = $value;
             }
         }
    }
}
