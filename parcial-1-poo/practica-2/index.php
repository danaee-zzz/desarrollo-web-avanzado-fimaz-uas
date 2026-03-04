<?php
    include 'Admin.php';
    $admin = new Admin('Danna Paola Lizarraga Hernandez','paolahernandez5245@gmail.com');
    echo '<p>Objeto $admin->getNombre ' . $admin->getNombre() . '</p>';
    echo '<p>Objeto $admin->getEdad ' . $admin->getCorreo() . '</p>';
    echo $admin->getRol();
?>