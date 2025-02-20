<?php
//Clase Libro
class Libro{
    private $titulo;
    private $precio;
    private $cantidad;

    public function __construct($titulo, $precio, $cantidad){
        $this->titulo = $titulo;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
    }

    //Getters y setters
    public function getTitulo(): string {
        return $this->titulo;
    }

    public function setTitulo(string $nombre): void {
        $this->titulo = $nombre;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function setPrecio(float $precio): void {
        $this->precio = $precio;
    }

    public function getCantidad(): float {
        return $this->cantidad;
    }

    public function setCantidad(float $cantidad): void {
        $this->precio = $cantidad;
    }
}

?>
