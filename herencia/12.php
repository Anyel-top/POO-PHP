<?php
// herencia
abstract class Persona{
    private static $nombre;
    private static $apellido;
    private static $email;
    private static $telefono;

    public function __construct($nombre, $apellido, $email, $telefono)
    {
        self:: $nombre;
        self:: $apellido;
        self:: $email;
        self:: $telefono;
       
    }
    public function mostrarInformacion(){
        echo "Nombre: " . $this-> nombre . " " . 
        $this -> apellido . " Email: " . $this -> email;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        return $this->nombre = $nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellido){
        return $this->apellido = $apellido;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        return $this->email = $email;
    }
}
class Empleado extends Persona{
    private $codigo;
    private $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        
        $this -> codigo = $codigo;
        $this -> departamento = $departamento;
    }
    public static function obtenerEmpleado(){
        echo "Metodo Estatico";
    }
}
class Proveedor extends Persona{
    private $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this -> empresa = $empresa;
    }
    
}
//$persona1 = new Persona('Angel', 'Patiño', 'appaino@espe.edu.ec', '0939470232');
echo "<pre>";
//var_dump($persona1);
echo "</pre>";
Empleado::obtenerEmpleado();

?>