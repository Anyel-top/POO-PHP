<?php
// Instantiating a Class
class Empleado{
    private $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
    // Constructor property promotion with type declarations
    public function __construct( String $nombre, String $apellido, String $departamento, int $codigo, String $email)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->codigo = $codigo;
        $this->codigo = $email;
    }
    public function nombreEmpleado(){
        return "$this -> nombre";
    }
    public function nombreDepartamento(){
        return "$this->departamento";
    }
    public function cambiarNombre($nombre){
        $this->nombre = $nombre;
    }
    
}
// Create a new object of the Employee class named $employee1
$empleado1 = new Empleado("Anyel", "Patiño", "TIC", "1", "cybedevmatrix@gmail.com");
// Assign values to the properties of the $empleado2 object
// Print the value of the name property using var_dump
$empleado2 = new Empleado("Anyel", "Monkey Di", "TIC", "1", "luffy@gmail.com");

$empleado1 -> nombreEmpleado();



?>