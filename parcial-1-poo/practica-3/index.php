<?php
include 'Admin.php';
include 'Alumno.php';

try {
    $admin = new Admin('danna', 'desarrollador1@hotmail.com');
} catch (\Throwable $th) {
    echo 'Error al crear usuario administrador' . ':' . $th->getMessage();
}
