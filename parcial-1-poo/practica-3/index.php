<?php
include 'Admin.php';
include 'Alumno.php';


try {
    $admin1 = new Admin('Danna Paola Lizarraga Hernandez', 'danna@gmail.com');
    echo 'Nombre : ' . $admin1->getNombre() . '</br>';
    echo 'Correo : ' . $admin1->getCorreo() . '</br>';
    echo 'Rol : ' . $admin1->getRol() . '</br>';
} catch (\Throwable $th) {
    echo 'Error al crear usuario administrador 1: ' . $th->getMessage() . "</br>";
}

try {
    $admin2 = new Admin('Verito', '');
    echo 'Nombre : ' . $admin2->getNombre() . '</br>';
    echo 'Correo : ' . $admin2->getCorreo() . '</br>';
    echo 'Rol : ' . $admin2->getRol() . '</br>';
} catch (\Throwable $th) {
    echo 'Error al crear usuario administrador 2: ' . $th->getMessage() . '</br></br>';
}

try {
    $alumno = new Alumno('Anna Cristina Lizarraga Hernandez', 'anali@gmail.com');
    $alumno->setMatricula(2828);

    echo 'Nombre : ' . $alumno->getNombre() . '</br>';
    echo 'Correo : ' . $alumno->getCorreo() . '</br>';
    echo 'Matricula : ' . $alumno->getMatricula() . '</br>';
    echo 'Rol : ' . $alumno->getRol() . '</br>';
} catch (\Throwable $th) {
    echo 'Error al crear usuario alumno: ' . $th->getMessage() . "</br></br>";
}

try {
    $alumno2 = new Alumno('Marco Garate', 'marco.com');
    echo 'Nombre : ' . $alumno2->getNombre() . '</br>';
    echo 'Correo : ' . $alumno2->getCorreo() . '</br>';
    echo 'Rol : ' . $alumno2->getRol() . '</br>';
} catch (\Throwable $th) {
    echo 'Error al crear usuario alumno 2: ' . $th->getMessage() . "</br></br>";
}
