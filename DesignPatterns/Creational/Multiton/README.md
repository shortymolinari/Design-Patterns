## \# Multiton 
>:sparkles: ***Design Patters | Creational***

***THIS IS CONSIDERED TO BE AN ANTI-PATTERN! FOR BETTER TESTABILITY AND MAINTAINABILITY USE DEPENDENCY INJECTION!***

---
#### \#Propósito
- Para tener solo una lista de las instancias con nombre que se utilizan, como un singleton pero con ***n*** instancias.

#### \#Check list

- [x] Defina un atributo estático privado en la clase "single instance"
- [x] Defina las constantes que almacenaran las instancias que va a manejar 
- [x] Defina una función de acceso estática pública en la clase.
- [x] Realice "lazy initialization" (creación en el primer uso) en la función de acceso.
- [x] Defina todos los constructores como  protegidos o privados.
- [x] Los clientes solo pueden usar la función de acceso para manipular el Multiton.

#### \#Ejemplos
- 2 conectores DB, por ejemplo, Una para MySQL, la otra para SQLite.
- Múltiples registradores (uno para mensajes de depuración, uno para errores).

![GitHub Logo](https://designpatternsphp.readthedocs.io/en/latest/_images/uml15.png)

