<?php
include 'clases/Admin.php';
include 'clases/Alumno.php';

try {

    $administrador = new Admin('Danna Paola Lizarraga Hernandez' , 'danaezzz@gmail.com');
    $alumno = new Alumno('Ana Cristina Lizarraga Hernandez' , 'crislzh@gmail.com' , 2918);

    echo '<table>
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Matricula</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>'.$administrador->getNombre().'</td>
                    <td>'.$administrador->getCorreo().'</td>
                    <td>'.$administrador->getRol().'</td>
                    <td>--------------</td>
                </tr>
                <tr>
                    <td>'.$alumno->getNombre().'</td>
                    <td>'.$alumno->getCorreo().'</td>
                    <td>'.$alumno->getRol().'</td>
                    <td>'.$alumno->getMatricula().'</td>
                </tr>
            </tbody>
        </table>';
    
    $usuario = new Usuario('Marco Garate' , 'correo_invalido.com');

} catch (\Throwable $th) {
    echo '</br> Error controlado: '.$th->getMessage();
}


?>