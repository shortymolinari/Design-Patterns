## \#Adapter
>:sparkles: ***Design Patters | Structural***
---
### Propósito
Es un patrón de diseño estructural que permite la colaboración de objetos con interfaces incompatibles.
Se crea un objeto especial que convierte la interfaz de un objeto para que otro objeto pueda entenderlo

- El adaptador obtiene una interfaz compatible con uno de los objetos existentes.
- Con esta interfaz, el objeto existente puede llamar de forma segura a los métodos del adaptador.
- Al recibir una llamada, el adaptador pasa la solicitud al segundo objeto, pero en un formato y orden que el segundo objeto espera.
- A veces, incluso es posible crear un adaptador bidireccional que pueda convertir las llamadas en ambas direcciones.

#### \#Check list


#### Diagrama
![Adapter](https://refactoring.guru/images/patterns/diagrams/template-method/structure-2x.png)