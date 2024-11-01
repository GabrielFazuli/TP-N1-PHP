<?php

abstract class Vehiculo {
    protected $color;
    protected $marca;
    protected $modelo;
    protected $precio;
    protected $radio;

    public function __construct($color, $marca, $modelo, $precio = null) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
    }

    public function agregarRadio(Radio $radio) {
        if ($this->radio === null) {
            $this->radio = $radio;
        } else {
            throw new Exception("Este vehículo ya tiene un radio.");
        }
    }

    public function cambiarRadio(Radio $radio) {
        $this->radio = $radio;
    }

    public function getRadio() {
        return $this->radio;
    }
}