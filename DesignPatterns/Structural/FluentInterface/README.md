## \# Fluent Interface 
>:sparkles: ***Design Patters | Structural***
---

Una interfaz fluida es una API orientada a objetos que proporciona un código "más legible".

#### \#Propósito
Escribir código que sea fácil de leer, al igual que las oraciones en un idioma natural (***como el inglés***)

- Es normalmente implementada con métodos en cascada, concretamente encadenamiento de métodos: la idea es que se pueda aplicar múltiples propiedades a un objeto con encadenamiento sin tener que re-especificar el código cada vez.

Fluent Interface  nos permite escribir código como este:

`$programmer->born()->eat()->sleep()->code()->die();` 

en vez de esto

```PHP
$programmer->born();
$programmer->eat();
$programmer->sleep();
$programmer->code();
$programmer->die();
```

- Fluent Interface tiene sentido en algunas API, tales como Query Builders.
- Cuando se trata de juntar nodos en una estructura jerárquica.

### Otros ejemplos
- El QueryBuilder de Doctrine2
- PHPUnit usa interfaces fluidas para construir objetos simulados

![Fluent Interface](https://designpatternsphp.readthedocs.io/en/latest/_images/uml31.png)


