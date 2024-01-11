<?php
require_once 'persona.php';
class Bombero extends Persona
{
    public $especialidad;

    public function __construct($id, $nombre, $correo, $edad)
    {
        parent::__construct($id, $nombre, $correo, $edad);
    }

    public function apagarIncendio()
    {
        return "¡Soy un bombero y estoy apagando un incendio!\n";
    }

    private function darEdad()
    {
        return "Tengo " . $this->getEdad() . " años";
    }
    public function saludar(bool $detalles = true)
    {
        if ($detalles) {
            return "Hola, mi nombre es {$this->getNombre()}, soy bombero y " . $this->darEdad() . ". ¡Saludos!\n";
        } else {
            return "Hola, mi nombre es {$this->getNombre()}. ¡Saludos!\n";
        }
    }
}
