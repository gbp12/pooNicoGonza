<?php

class Persona
{
    private $id;
    private $nombre;
    private $correo;
    private $edad = 18;

    public function __construct(int $id, string $nombre, string $correo, int $edad = 18)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->edad = $edad;
    }

    public function saludar()
    {
        return "Hola, mi nombre es {$this->nombre}. ¡Saludos!\n";
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    protected function setEdad($edad)
    {
        $this->edad = $edad;
    }
}
