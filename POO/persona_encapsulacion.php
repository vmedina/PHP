<?php
class Persona {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        if ($edad > 0) {
            $this->edad = $edad;
        }
    }
}

$persona = new Persona("Juan", 25);
echo $persona->getNombre();  // Output: Juan
$persona->setEdad(30);
echo $persona->getEdad();    // Output: 30
