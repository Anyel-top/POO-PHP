<?php
// herencia
class Persona{
    private $nombre;
    private $apellido;
    private $email;
    private $telefono;

    public function __construct($nombre, $apellido, $email, $telefono)
    {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> email = $email;
        $this -> telefono = $telefono;
       
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
}
class Proveedor extends Persona{
    private $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this -> empresa = $empresa;
    }
    
}
$empleado1 = new Empleado('Angel', 'Patiño', 'appaino@espe.edu.ec', '0939470232', '001', 'TIC');
$proveedor1 = new Proveedor('Jhon', 'Zambrano', 'jhon@espe.edu.ec', '0999999999', 'Alfanet');
echo "<pre>";
var_dump($empleado1);
echo "</pre>";

echo "<pre>";
var_dump($proveedor1);
echo "</pre>";
?>