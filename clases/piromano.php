<?php

require_once 'persona.php';

class Piromano extends Persona
{
    const COSAS_PARA_QUEMAR = ["arbol", "coche", "edificio"];

    public function __construct($id, $nombre, $correo, $edad)
    {
        parent::__construct($id, $nombre, $correo, $edad);
    }

    public function crearIncendio()
    {
        $elemento = self::seleccionarElementoAleatorio();
        return "Soy un piromano y voy a quemar este " . $elemento . "\n";
    }

    private static function seleccionarElementoAleatorio()
    {
        $claveAleatoria = array_rand(self::COSAS_PARA_QUEMAR);
        return self::COSAS_PARA_QUEMAR[$claveAleatoria];
    }
}
