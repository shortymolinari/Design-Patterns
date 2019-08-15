## \#Template Method
>:sparkles: ***Design Patters | Behavioral***
---
### Propósito
Define la estructura del programa de un algoritmo pero delega la implementación de esos pasos a clases secundarias.

El patrón Template method sugiere que se divida un algoritmo en una serie de pasos, convertir estos pasos en métodos y colocar una serie de llamadas a estos métodos dentro de un solo "Template method".
Los pasos pueden ser abstractos o tener alguna implementación por defecto. Para usar el algoritmo, se supone que el cliente debe proporcionar su propia subclase, implementar todos los pasos abstractos y anular algunos de los opcionales si es necesario (pero no el template method en sí).


- Se puede usar cuando se quiera que los clientes extiendan solo pasos particulares de un algoritmo, pero no todo el algoritmo o su estructura.

-  Permite convertir un algoritmo monolítico en una serie de pasos individuales que pueden ampliarse fácilmente mediante subclases mientras se mantiene intacta la estructura definida en una superclase.

- Se puede usar cuando se tienen varias clases que contienen algoritmos casi idénticos con algunas diferencias menores.


#### \#Check list


#### Diagrama
![Template Method](https://refactoring.guru/images/patterns/diagrams/template-method/structure-2x.png)