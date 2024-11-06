<?php
class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function hacerSonido() {
        echo "Sonido genérico";
    }
}

class Perro extends Animal {
    public function hacerSonido() {
        echo "Ladrido";
    }
}

$perro = new Perro("Rex");
$perro->hacerSonido();  // Output: Ladrido
