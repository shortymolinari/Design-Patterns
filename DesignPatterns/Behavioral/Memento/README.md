## \#Memento
>:sparkles: ***Design Patters | Behavioral***
---
### Propósito
El patrón de Memento consiste en capturar y almacenar el estado actual de un objeto de una manera que puede restaurarse posteriormente de manera suave.

- Si bien la mayoría de la gente recuerda este patrón gracias al caso de uso de "deshacer", también es indispensable cuando se trata de transacciones (es decir, si necesita deshacer una operación en caso de error).

- Memento hace que el propio objeto sea responsable de crear una instantánea de su estado. Ningún otro objeto puede leer la instantánea, lo que hace que los datos de estado del objeto original estén seguros y protegidos. 

#### \#Check list


#### Diagrama
![Memento](https://designpatternsphp.readthedocs.io/en/latest/_images/uml.png)