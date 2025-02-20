<?php
////Pablo Pollos Iglesias
class Libro{
    private $titulo;
    private $precio;

    public function __construct($titulo, $precio){
        $this->titulo = $titulo;
        $this->precio = $precio;
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
}

?>
