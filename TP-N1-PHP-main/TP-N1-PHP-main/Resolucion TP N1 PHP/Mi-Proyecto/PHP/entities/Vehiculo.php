<?php 
    abstract class Vehiculo {
    protected $color;
    protected $marca;
    protected $modelo;
    protected $precio;

    public function __construct($color, $marca, $modelo, $precio = null) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
    }

    public function getColor() {
        return $this->color;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function agregarRadio($radio) {
        // Método abstracto para agregar una radio
    }

    public function cambiarRadio($radio) {
        // Método abstracto para cambiar la radio
    }
}
?>