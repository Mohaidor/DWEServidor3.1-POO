<?php
class Contacto
{

    private $id;
    private $nombre;
    private $telefono;

    //Constructor mágico
    public function __construct($id, $nombre, $telefono)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
    }

    //Setters y Guetters
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    //__toString mágico
    public function __toString()
    {
        return "$this->id - $this->nombre ($this->telefono)";
    }
}
