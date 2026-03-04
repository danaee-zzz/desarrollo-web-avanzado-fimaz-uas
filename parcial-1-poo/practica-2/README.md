Practica de laboratorio 2: Herencia y reutilizacion de codigo en PHP.

Alumna: Danna Paola Lizarraga Hernandez

Objetivo: Implementar herencia mediante la extension de clases, reutilizando atributos y metodos de una clase base.

- Explicacion de la herencia aplicada: La herencia de la clase Usuario permite que su clase hija Admin reutilice los atributos y metodos.

Usuario es la clase base, Admin la derivada, Admin hereda los atributos privados (getters y setters), y agrega su propio metodo getRol().

- Diferencias entre Usuario y Admin:
USUARIO:
1. Clase base (padre)
2. Define atributos nombre y correo
3. Tiene getters y setters
4. No define el Rol.
ADMIN:
1. Clase derivada (clase hija)
2. Hereda atributos
3. Hereda getters y setters
4. Define el metodo getRol()

- Prueba de funcionamiento
En index.php se creo el objeto tipo Admin y se mostro en pantalla: Nombre, correo y Rol.
Ejemplo: Danna Paola Lizarraga Hernandez-paolahernandez5245@gmail.com-administrador

