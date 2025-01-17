## \# Null Object 
>:sparkles: ***Design Patters | Behavioral***
---
### Propósito
Object Pool es un patrón de diseño de creación de software que utiliza un conjunto de objetos inicializados que se mantienen listos para usar, una "agrupación", en lugar de asignarlos y destruirlos a pedido. Un cliente del grupo solicitará un objeto del grupo y realizará operaciones en el objeto devuelto. Cuando el cliente ha finalizado, devuelve el objeto, que es un tipo específico de objeto de fábrica, al grupo en lugar de destruirlo.

La agrupación de objetos puede ofrecer un aumento significativo del rendimiento en situaciones donde el costo de inicializar una instancia de clase es alto, la tasa de creación de instancias de una clase es alta y el número de instancias en uso en cualquier momento es bajo. El objeto agrupado se obtiene en un tiempo predecible cuando la creación de los nuevos objetos (especialmente en la red) puede llevar un tiempo variable.

Sin embargo, estos beneficios son en su mayoría verdaderos para los objetos que son caros con respecto al tiempo, como las conexiones de bases de datos, conexiones de socket, hilos y objetos gráficos grandes como fuentes o mapas de bits. En ciertas situaciones, la agrupación de objetos simple (que no contiene recursos externos, pero solo ocupa la memoria) puede no ser eficiente y puede disminuir el rendimiento.

#### \#Check list

- [x] Crear una interface
- [x] Crear un objeto real que implementa la interface y el comportamiento o la funcionalidad que se espera.
- [x] Crear un objeto nulo que implementa la interface y que pueda sustituirse por el objeto real , "este objeto nulo no hace nada".

#### Diagrama
![Null Object ](https://designpatternsphp.readthedocs.io/en/latest/_images/uml5.png)