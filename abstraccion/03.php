<?php
// Instantiating a Class
class Empleado{
    // Properties (attributes) of the class
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
}
// Create a new object of the Employee class named $employee1
$empleado1 = new Empleado();
// Assign values to the properties of the $employee1 object
// Print the value of the name property using var_dump

$empleado1-> nombre = "Anyel"; // This will print "Anyel"
$empleado1-> apellido = "Diaz";// This will print "Diaz"
var_dump($empleado1-> nombre);
var_dump($empleado1-> apellido);


$empleado2 = new Empleado();
$empleado2-> nombre = "Lucho";
$empleado2-> apellido = "Portuan";
var_dump($empleado2-> nombre);
var_dump($empleado1-> apellido);


?>