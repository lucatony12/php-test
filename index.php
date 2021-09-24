<?php

class myClass {
   private $nombre;
   private $apellido;
   private $genero;

   function __construct($nombre, $apellido, $genero) {
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->genero = $genero;
   }

   function toString() {
      return "Hola, soy " . $this->nombre . " " . $this->apellido . " del sexo " . $this->genero;
   }
}

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$genero = $_REQUEST['genero'];

$class = new myClass($nombre, $apellido, $genero); 
echo $class->toString();
