## \#Observer
>:sparkles: ***Design Patters | Behavioral***
---
### Propósito
El patrón Observer es un patrón en el que un objeto, llamado sujeto, mantiene una lista de sus dependientes, llamados observadores, y les notifica automáticamente cualquier cambio de estado, generalmente llamando a uno de sus métodos.

- Permite definir un mecanismo de suscripción para notificar a varios objetos sobre los eventos que suceden en el objeto que están observando.
- Define una dependencia entre objetos para que cada vez que un objeto cambie su estado, se notifique a todos sus dependientes.
- También conocido como: Event-Subscriber, Listener.

**PHP** tiene varias interfaces integradas (**SplSubject**, **SplObserver**) que se pueden usar para hacer que sus implementaciones del patrón Observer sean compatibles con el resto del código PHP.
- En ocaciones tambien se puede implementar **SplObjectStorage**, para almacener los **SplObserver**


#### \#Check list


#### Diagrama
![Observer](https://designpatternsphp.readthedocs.io/en/latest/_images/uml6.png)