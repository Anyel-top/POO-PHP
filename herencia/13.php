<?php
include '13BD.php';

class Empleado {
    private $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct(String $nombre, String $apellido, String $departamento, int $codigo, String $email) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->codigo = $codigo;
        $this->email = $email;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        return $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        return $this->apellido = $apellido;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        return $this->codigo = $codigo;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function setDepartamento($departamento) {  // Corregir el nombre del método aquí
        return $this->departamento = $departamento;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        return $this->email = $email;
    }
}

$empleado1 = new Empleado("Anyel", "Patiño", "TIC", "101", "cybedevmatrix@gmail.com");
$nombre = $empleado1->getNombre();

$db = new BD($nombre);
$db->guardar();
var_dump($db);
?>
