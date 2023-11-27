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
        $this->email = $email;
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
    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($codigo){
        return $this->codigo = $codigo;
    }
    public function getDepartamento(){
        return $this->departamento;
    }
    public function setDepartemento($departamento){
        return $this->departamento = $departamento;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        return $this->email = $email;
    }
}
// Create a new object of the Employee class named $employee1
$empleado1 = new Empleado("Anyel", "Patiño", "TIC", "1", "cybedevmatrix@gmail.com");

echo $empleado1 -> getNombre() . " - ";
echo $empleado1 -> getApellido() . " - ";
echo $empleado1 -> getCodigo() . " - ";
echo $empleado1 -> getDepartamento() . " - ";
echo $empleado1 -> getEmail();
echo "<br>";
$empleado1 -> setNombre('Angel');
echo $empleado1 -> getNombre() . " - ";




?>