<?php

class Persona
{
    private $id;
    private $nombre;
    private $correo;

    public function __construct($id, $nombre, $correo)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function saludar()
    {
        return "Hola, mi nombre es {$this->nombre}. ¡Saludos!";
    }
}
