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

- [x] Define a private static attribute in the "single instance" class.
- [x] Define a public static accessor function in the class.
- [x] Do "lazy initialization" (creation on first use) in the accessor function.
- [x] Define all constructors to be protected or private.
- [x] Clients may only use the accessor function to manipulate the Singleton.

![GitHub Logo](https://designpatternsphp.readthedocs.io/en/latest/_images/uml19.png)

