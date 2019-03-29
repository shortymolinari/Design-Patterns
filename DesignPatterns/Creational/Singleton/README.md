## \# Singleton 
>:sparkles: ***Design Patters | Creational***

***THIS IS CONSIDERED TO BE AN ANTI-PATTERN! FOR BETTER TESTABILITY AND MAINTAINABILITY USE DEPENDENCY INJECTION!***

---
#### \#Propósito
- Para tener solo una instancia de este objeto en la aplicación que manejará todas las llamadas.
- Asegúrese de que una clase tenga solo una instancia y proporcione un punto de acceso global a ella

#### \#Ejemplos
- Conector DB
- Registrador (también puede ser un Multiton si hay muchos archivos de registro para varios propósitos)
- Bloquear archivo para la aplicación (solo hay uno en el sistema de archivos ...)

#### \#Check list

- [x] Defina un atributo estático privado en la clase "single instance".
- [x] Defina una función de acceso estática pública en la clase.
- [x] Realice la "lazy initialization" (creation on first use) en la función de acceso.
- [x] Defina todos los constructores para ser protegidos o privados.
- [x] Los clientes solo pueden usar la función de acceso para manipular el Singleton.

![GitHub Logo](https://designpatternsphp.readthedocs.io/en/latest/_images/uml19.png)

