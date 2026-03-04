<?php
    include 'Usuario.php';
    $usuario = new Usuario('Danna Paola Lizarraga Hernandez','paolahernandez5245@gmail.com');
    echo '<p>Objeto $usuario->getNombre ' . $usuario->getNombre() . '</p>';
    echo '<p>Objeto $usuario->getEdad ' . $usuario->getCorreo() . '</p>';
?>