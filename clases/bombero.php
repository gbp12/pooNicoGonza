<?php
require_once 'persona.php';
class Bombero extends Persona
{
    public $especialidad;

    public function __construct($id, $nombre, $correo)
    {
        parent::__construct($id, $nombre, $correo);
    }

    public function apagarIncendio()
    {
        return "¡Soy un bombero y estoy apagando un incendio!";
    }
}
$bombero1 = new Bombero(1, "Carlos", "carlos@example.com", "Rescate");

echo $bombero1->saludar() . "<br>";

echo $bombero1->apagarIncendio();
