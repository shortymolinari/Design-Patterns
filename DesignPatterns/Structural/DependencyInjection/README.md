## \#Dependency Injection
>:sparkles: ***Design Patters | Structural***
---
**Es un patrón de diseño orientado a objetos, en el que se suministran objetos a una clase en lugar de ser la propia clase la que cree dichos objetos.**

#### \#Propósito
Implementar una arquitectura reducioendo el acoplamiento para obtener un mejor código, más comprobable, mantenible y extensible.

***wikipedia***
- La inyección de dependencia es una técnica por la cual un objeto (o método estático) suministra las dependencias de otro objeto. Una dependencia es un objeto que se puede utilizar (un servicio). Una inyección es el paso de una dependencia a un objeto dependiente (un cliente) que lo usaría. El servicio se hace parte del estado del cliente. Pasar el servicio al cliente, en lugar de permitir que un cliente cree o encuentre el servicio, es el requisito fundamental del patrón.

---

La forma habitual de implementar este patrón es mediante un **"Contenedor DI"**, también llamado **"Contenedor IoC"** y objetos planos o simples. El contenedor inyecta a cada objeto los objetos necesarios según las relaciones de dependencia registradas

- En la inyección de independencias, normalmente, se usan interfaces. De esta forma conseguimos abstraer la relación entre una clase A que depende de una clase B sin importar la implementación de cada uno de los dos. De esta forma, conseguimos desacoplamiento.

- Esta ligado a la inversión de control 

### \#Fromas de inyectar las dependencias
- Constructor
- Métodos (por lo genarl setters)
- En una propiedad de la clase

#### \#Check list

- [x] Crear una clase cuyas propiedades y metodos sean una representación textual de su funcionamiento facilitando su lectura.


![Dependency Injection](https://designpatternsphp.readthedocs.io/es/latest/_images/uml29.png)


