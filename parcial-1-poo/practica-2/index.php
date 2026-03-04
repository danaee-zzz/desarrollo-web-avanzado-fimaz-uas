<?php
    include 'Admin.php';
    $admin = new Admin('Danna Paola Lizarraga Hernandez','paolahernandez5245@gmail.com');
    echo $admin->getNombre() . "-" .$admin->getCorreo(). "-" .$admin->getRol();
?>