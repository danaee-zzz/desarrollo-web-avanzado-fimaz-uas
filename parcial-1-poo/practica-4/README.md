Práctica 4: Integración POO + Herencia + Validaciones + Excepciones (PHP 8+)

Alumno: Danna Paola Lizarraga Hernandez.

Objetivo de la práctica: Construir un mini sistema utilizando Programación Orientada a Objetos en PHP, integrando los conceptos principales vistos en la unidad:
- Encapsulamiento
- Herencia
- Polimorfismo básico mediante el método getRol()
- Validación de datos
- Manejo de excepciones con try/catch
- Generación de salida en HTML mediante una tabla

- Descripción del sistema: El sistema está compuesto por una clase base llamada Usuario y tres clases derivadas: Admin Alumno y Invitado. Cada una representa un tipo diferente de usuario dentro del sistema.

La clase base contiene los atributos y validaciones comunes, mientras que las clases hijas agregan atributos o comportamientos específicos. Además, el sistema incluye validación de correo electrónico y manejo de excepciones, lo que permite detectar errores y mostrar mensajes controlados al usuario.

- Clases implementadas: 
1. Clase Usuario (Clase base): Atributos nombre, correo. Funcionalidad: Constructor que recibe nombre y correo Validación del correo electrónico utilizando filter_var. Si el correo es inválido se lanza una excepción mediante throw new Exception. Métodos getters: getNombre(), getCorreo().
2. Clase Admin: Extiende la clase Usuario. Método implementado: getRol(). Representa usuarios con privilegios administrativos.
3. Clase Alumno: Extiende la clase Usuario. Atributo adicional: matricula. Métodos: getMatricula(), getRol() retorna Alumno. Esta clase representa a los estudiantes dentro del sistema.
4. Clase Invitado: Extiende la clase Usuario. Atributo adicional empresa. Métodos: getEmpresa(), getRol() retorna Invitado. Representa usuarios externos que pertenecen a una empresa.

- Funcionamiento de index.php: El archivo index.php se encarga de probar el funcionamiento del sistema. 
Proceso:
1. Se importan las clases: Admin, Alumno, Invitado.
2. Se crea un arreglo llamado: $usuarios.
3. Dentro de un bloque try se crean los siguientes objetos: Un Admin válido, un Alumno válido, un Invitado.
