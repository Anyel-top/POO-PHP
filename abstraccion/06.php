<?php
// Instantiating a Class
class Empleado{
    // Constructor property promotion with type declarations
    public function __construct( 
        public $nombre, 
        public $apellido, 
        public $departamento, 
        public $codigo, 
        public $email)
    {
        
    }
    
}
// Create a new object of the Employee class named $employee1
$empleado1 = new Empleado("Anyel", "Patiño", "TIC", "1", "cybedevmatrix@gmail.com");
// Assign values to the properties of the $employee1 object
// Print the value of the name property using var_dump
var_dump($empleado1-> nombre);
var_dump($empleado1-> apellido);
var_dump($empleado1-> departamento);
var_dump($empleado1-> codigo);





?>