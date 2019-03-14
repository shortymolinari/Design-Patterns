## \# Flyweight 
>:sparkles: ***Design Patters | Structural***
---
### Propósito
Se utiliza para minimizar el uso de la memoria o los gastos de cómputo al compartir tanto como sea posible con objetos similares.
- Ahorrar recursos
- Compartir
- Cualquier cosa que sea cacheada es Flyweiht
- Cualquier cosa que se almacene en caché es Flyweiht
- Una característica importante de los objetos Flyweiht es que son inmutables. Esto significa que no se pueden modificar una vez que se han construido.

Una práctica común es mantener el estado en estructuras de datos externas y pasarlas al objeto de peso mosca cuando sea necesario.


#### [x] Check List

1. Asegúrese de que la sobrecarga de objetos sea un problema que requiera atención y que el cliente de la clase pueda y esté dispuesto a absorber la reordenación de responsabilidades.

2. Dividir el estado de la clase de destino en: estados compartible (***intrínseca***) y estado no compartido (***extrínseca***).

3. Eliminar el estado no compartible de los atributos de clase, y añádirlo a la lista de argumentos de llamada de los métodos afectados.

4. Cree un **Factory** que pueda almacenar en caché y reutilizar las instancias de clase existentes.

5. El cliente debe utilizar el **Factory** en lugar del operador `new` para solicitar objetos.

6. El cliente (o un tercero) debe buscar o calcular el estado no compartible y proporcionar ese estado a los métodos de clase.

#### Diagrama
![Flyweight](https://designpatternsphp.readthedocs.io/en/latest/_images/uml32.png)
