<?php
require_once 'clases/piromano.php';
require_once 'clases/bombero.php';
$piromano = new Piromano(1, "Carlos", "carlos@example.com", 35);

echo $piromano->crearIncendio();

$bombero = new Bombero(2, "Juan", "juan@example.com", 30);
echo $bombero->saludar(true);
echo $bombero->apagarIncendio();
