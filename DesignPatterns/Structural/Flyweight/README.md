## \# Flyweight 
>:sparkles: ***Design Patters | Structural***
---
### Propósito
Se utiliza para minimizar el uso de la memoria o los gastos de cómputo al compartir tanto como sea posible con objetos similares.
- Compartir
- Ahorrar recursos
- Cualquier cosa que se almacene en caché es Flyweight
- Una característica importante de los objetos Flyweight es que son inmutables. Esto significa que no se pueden modificar una vez que se han construido.
    + Estado único (extrínseco) (mutable) / Unique (Extrinsic) state (mutable)
    + Estado repetitivo (intrínseco) (inmutable) / Repeating (intrinsic) state (immutable)

El estado intrínseco (***datos constantes de un objeto***). Vive dentro del objeto; Otros objetos solo pueden leerlo, no cambiarlo.

El estado extrínseco. Es el resto del estado del objeto, a menudo alterado "desde el exterior" por otros objetos.

Una práctica común es mantener el estado en estructuras de datos externas y pasarlas al objeto Flyweight cuando sea necesario.


#### [x] Check List

- [x] Asegúrarse de que la sobrecarga de objetos sea un problema (sobre carga de RAM) que requiera atención.
- [x] Dividir el estado de la clase Flyweight en: estados compartible (***intrínseca***) y estado no compartido (***extrínseca***).
- [x] Eliminar el estado no compartible de los atributos de clase, y añádirlo a la lista de argumentos de los métodos.
- [x] Cree un **Factory** que pueda almacenar en caché y reutilizar las instancias de clase existentes (*Opcionalmente).
    + Validar si el objeto existe para entregarlo  o crear uno nuevo.
    + El cliente debe utilizar el **Factory** en lugar del operador `new` para solicitar objetos.
- [x] El cliente (o un tercero) debe buscar o calcular el estado no compartible y proporcionar ese estado a los métodos de la clase.

#### Diagrama
![Flyweight](https://designpatternsphp.readthedocs.io/en/latest/_images/uml32.png)
