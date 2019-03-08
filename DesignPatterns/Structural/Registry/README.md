## \# Registry 
>:sparkles: ***Design Patters | Structural***
---
####\#Propósito
- Para implementar un **almacenamiento central** para los objetos que se usan a menudo en toda la aplicación, se implementa normalmente usando una clase **abstracta** con solo métodos estáticos (o usando el patrón Singleton).

- **Registry** contiene un mapa de claves 1-1 de instancias. Normalmente, la clave es (o representa) una clase y el valor es una instancia de esa clase.

- **Registry** es esencialmente un objeto global, o al menos parece uno. ***Es recomedable utiliazarlo usando Dependency Injection*** para evitar introducir el estado global, que debe evitarse en todo momento!

![Registry](https://designpatternsphp.readthedocs.io/en/latest/_images/uml34.png)