<?php
include './clases/Admin.php';
include './clases/Alumno.php';
include './clases/Invitado.php';

$usuarios = [];

try {
    $administrador = new Admin('Marco Garate' , 'ejemplo@gmail.com');
    $alumno = new Alumno('Danna Paola Lizarraga Hernandez', 'danaezzz@gmail.com', 12345);
    $invitado = new Invitado('Anna Cristina Lizarraga Hernandez' , 'cris@gmail.com', 'Tienda Panda');

    
    $usuarios = [$administrador , $alumno , $invitado];
    
    echo '
        <table>
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Matricula</th>
                    <th scope="col">Empresa</th>
                </tr>
            </thead>
            <tbody>';

                foreach ($usuarios as $key => $usuario) {
                    $matricula = '_______';
                    $empresa = '_______';

                    if (method_exists($usuario , 'getMatricula')) {
                        $matricula = $usuario->getMatricula();    
                    }

                    if (method_exists($usuario , 'getEmpresa')) {
                        $empresa = $usuario->getEmpresa();
                    }
                    
                    echo '<tr>
                            <td>'.$usuario->getNombre().'</td>
                            <td>'.$usuario->getCorreo().'</td>
                            <td>'.$usuario->getRol().'</td>
                            <td>'.$matricula.'</td>
                            <td>'.$empresa.'</td>
                        </tr>';
                    }
    echo    '</tbody>
        </table>
    </div>';
    
    
    $usuarioError = new Alumno('Diego Rivera' , 'correomalformado.com.mx' , 12231);
} catch (\Throwable $th) {
    echo '</br> Error controlado: ' . $th->getMessage();
}
