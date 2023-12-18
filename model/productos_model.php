<?php

class Productos
{
    
    private $id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $imagen;

    public function __construct($id, $nombre, $descripcion, $precio, $imagen)
    {
        
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->imagen = $imagen;
    }


    //getter y setter de la clase productos

    public function getId()
    {
        return $this->id;
    }


    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }


    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function setDescripcion($descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }


    public function getImagen()
    {
        return $this->imagen;
    }


    public function setImagen($imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    
    public function getPrecio()
    {
        return $this->precio;
    }

   
    public function setPrecio($precio): self
    {
        $this->precio = $precio;

        return $this;
    }
}
