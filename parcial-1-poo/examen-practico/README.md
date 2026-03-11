EXAMEN PRÁCTICO – PARCIAL 1 (POO en PHP)
Alumna: Danna Paola Lizarraga Hernandez

Descripción del Sistema: El sistema implementa una estructura de clases para gestionar distintos tipos de usuarios.

Se define una clase base llamada Usuario, la cual contiene atributos y validaciones comunes. A partir de esta clase se crean dos clases derivadas: Admin y Alumno.

Cada clase derivada hereda las propiedades y métodos de la clase base y agrega su propia funcionalidad específica.

El sistema incluye validación de correos electrónicos y manejo de excepciones para evitar la creación de objetos con datos incorrectos.

Flujo de Clases del Sistema: El sistema intenta crear un objeto de tipo Admin o Alumno y el constructor de la clase Usuario se ejecuta automáticamente. Dentro del constructor se valida que el correo electrónico tenga un formato válido, si el correo es válido el objeto se crea correctamente, pero si el correo es invalido se lanza una excepción.
En el archivo index.php se utiliza un bloque try/catch para capturar el error y el sistema muestra un mensaje de error controlado sin detener la ejecución. Este flujo nos permite un manejo seguro de errores y evita fallos inesperados.

Clases Implementadas: Clase Usuario (Clase Base): Atributos nombre, correo. Funcionalidad: Constructor para inicializar los atributos, valida el formato del correo electrónico y lanza una excepción si el correo es inválido.
Clase Admin: La clase Admin extiende la clase Usuario, heredando sus atributos y métodos. Método adicional: getRol() que retorna "Administrador". Esta clase representa a un usuario con privilegios administrativos dentro del sistema.

Clase Alumno: La clase Alumno también extiende la clase Usuario. Atributo adicional: matricula. Método adicional: getRol() que retorna "Alumno".

Manejo de Excepciones: En el archivo index.php se implementa el manejo de excepciones utilizando bloques:
try { // creación del objeto } catch (Exception $e) { // manejo del error }

Este mecanismo permite capturar errores generados durante la validación del correo electrónico y mostrar mensajes controlados al usuario.

Instrucciones de Ejecución:
Colocar la carpeta practica-3 dentro del directorio del servidor local (por ejemplo, htdocs en XAMPP).
Iniciar el servidor Apache desde el panel de control de XAMPP.
Abrir un navegador web.
Acceder a la siguiente dirección: http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/examen-practico/index.php
Verificar el funcionamiento del sistema y los mensajes de error cuando se ingresan correos inválidos.
Conclusión: En esta práctica se aplicaron conceptos fundamentales de la Programación Orientada a Objetos en PHP, incluyendo: Herencia entre clases, encapsulamiento de atributos, validación de datos, manejo de excepciones y diseño modular de clases.