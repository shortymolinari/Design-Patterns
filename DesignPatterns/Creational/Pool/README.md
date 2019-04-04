## \# Pool 
>:sparkles: ***Design Patters | Creational***
---
### Propósito
Object Pool es un patrón de diseño de creación de software que utiliza un conjunto de objetos inicializados que se mantienen listos para usar, una "agrupación", en lugar de asignarlos y destruirlos a pedido. Un cliente del grupo solicitará un objeto del grupo y realizará operaciones en el objeto devuelto. Cuando el cliente ha finalizado, devuelve el objeto, que es un tipo específico de objeto de fábrica, al grupo en lugar de destruirlo.

La agrupación de objetos puede ofrecer un aumento significativo del rendimiento en situaciones donde el costo de inicializar una instancia de clase es alto, la tasa de creación de instancias de una clase es alta y el número de instancias en uso en cualquier momento es bajo. El objeto agrupado se obtiene en un tiempo predecible cuando la creación de los nuevos objetos (especialmente en la red) puede llevar un tiempo variable.

Sin embargo, estos beneficios son en su mayoría verdaderos para los objetos que son caros con respecto al tiempo, como las conexiones de bases de datos, conexiones de socket, hilos y objetos gráficos grandes como fuentes o mapas de bits. En ciertas situaciones, la agrupación de objetos simple (que no contiene recursos externos, pero solo ocupa la memoria) puede no ser eficiente y puede disminuir el rendimiento.


#### \#Check list

- [x] Crear clase ObjectPool con 2 propiedades privadas que implemente la ***`interface Countable`***
    + Propiedad #1: array privado, este es el contenedor de los objetos creados y en uso
    + Propiedad #2: array privado, este es el contendor de los objetos liberados que pueden usarse nuevamente sin necesidad de crear nuevas instancias
- [x] Crear un  método para cear una objeto nuevo o que dovuelva uno que este disponible
- [x] Crear un  método que permita dejar disponible un objeto que ya no se necesite
- [x] Crear un metodo que permita hacer un conteo de los objetos en uso gracias a la ***`interface Countable`***

#### Diagrama
![Pool](https://designpatternsphp.readthedocs.io/en/latest/_images/uml16.png)