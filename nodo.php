<?php
declare(strict_types=1);

class Nodo {
    public int $id;
    public string $nombre;
    public float $precio;
    public int $stock;
    public ?Nodo $siguiente;
    public ?Nodo $anterior;

    public function __construct(
        int $id,
        string $nombre,
        float $precio,
        int $stock,
        ?Nodo $siguiente = null,
        ?Nodo $anterior = null
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->siguiente = $siguiente;
        $this->anterior = $anterior;
    }
}
?>