## \# Visitor
>:sparkles: ***Design Patters | Behavioral***
---
### Propósito
**Visitor** es un patrón de diseño de comportamiento que  permite separar algoritmos de los objetos en los que operan.

- Visitor permite agregar más operaciones a los objetos sin tener que modificarlos.
- Es una forma de seguir el principio abierto / cerrado.


#### \#Check list

- [x] Se crea una interfaz que declara la operación de aceptación (`accept`). Esto permite a un objeto ser **"`visitado`"** por el objeto **`visitante`**.
- [x] Se crea una interfaz que se utiliza para declarar las operaciones de **`visita`** para todos los tipos de clases **`visitables`**. 
- [x] Se crean clases (**`ConcreteVisitable`**) que implementen la interfaz **`Visitable`** y definen la operación de aceptación. El objeto **`visitante`** se pasa a este objeto mediante la operación de aceptación (`accept`).
- [x] Se crean clases (**`ConcreteVisitor`**). que implementen la interfaz **`Visitante`**. Para cada tipo de visitante se deben implementar todos los métodos de **`visita`**, declarados en la interface del **`visitante`**.

#### Diagrama
![Visitor](https://designpatternsphp.readthedocs.io/en/latest/_images/uml11.png)