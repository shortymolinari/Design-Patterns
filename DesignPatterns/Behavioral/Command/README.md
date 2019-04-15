## \#Command
>:sparkles: ***Design Patters | Behavioral***
---
### Propósito
Command es un patrón de diseño de comportamiento en el que un objeto se utiliza para encapsular toda la información necesaria para realizar una acción o desencadenar un evento en un momento posterior. Esta información incluye el nombre del método, el objeto que posee el método y los valores para los parámetros del método

Convierte una solicitud en un objeto independiente que contiene toda la información sobre la solicitud. Esta transformación le permite parametrizar métodos con diferentes solicitudes, retrasar o poner en cola la ejecución de una solicitud y admitir operaciones que se pueden deshacer.

- Permite encapsular acciones en objetos. 
- La idea clave detrás de este patrón es proporcionar los medios para desacoplar al cliente del receptor
- Convierte una solicitud en un objeto independiente que contiene toda la información sobre la solicitud

Un ejemplo genérico sería pedir comida en un restaurante. Usted (es decir, el Cliente) le pide al camarero (es decir, Invocador) que traiga algo de comida (es decir, Comando) y el camarero simplemente reenvía la solicitud al Chef (es decir, el Receptor) que tiene el conocimiento de qué y cómo cocinar. Otro ejemplo sería que usted (es decir, el Cliente) encienda (es decir, Comando) la televisión (es decir, el Receptor) utilizando un control remoto (es decir, Invocador).

#### \#Check list

- [x] Crear una interface con el método `execute()` (para ejecutar el comando a través del **Invocador**)
- [x] Crear una clase o varias que implementan la interface `Command`. Deben inicializar un **Receptor** por medio del constructor, (Command => los comandos)
- [x] Crear una clase que será el **Invocador** (`invoker`), esta debe recibir un comando que a su vez será ejecutado y desencadenara un acción sobre el **Receptor** (`receiver`).
- [x] Crear una clase que será el **Receptor** que tiene la lógica el funcionamiento que se quiere implementar el ejecutar el comando

#### Diagrama
![Command ](https://designpatternsphp.readthedocs.io/en/latest/_images/uml1.png)