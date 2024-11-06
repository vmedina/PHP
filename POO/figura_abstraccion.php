<?php
abstract class Figura {
    protected $color;

    public function __construct($color) {
        $this->color = $color;
    }

    abstract public function calcularArea();
}

class Circulo extends Figura {
    private $radio;

    public function __construct($color, $radio) {
        parent::__construct($color);
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }
}

$circulo = new Circulo("Rojo", 5);
echo $circulo->calcularArea();  // Output: 78.539816339744
