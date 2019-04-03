## \# Proxy 
>:sparkles: ***Design Patters | Structural***
---
Usando el patrón proxy, una clase representa la funcionalidad de otra clase.
>: **Es como una capa de acceso para pasar por una puerta**

### Propósito

- Proporcionar un sustituto o un marcador de posición para otro objeto para controlar el acceso a él
- Utilizar un nivel adicional de direccionamiento indirecto para soportar el acceso distribuido, controlado o inteligente.
- Agregar un contenedor y una delegación para proteger el componente real de una complejidad indebida.
- Para interactuar con cualquier cosa que sea pesada (cara) o imposible de duplicar.

### Tipos 

Un **proxy virtual** es un marcador de posición para objetos "caros de crear". El objeto real solo se crea cuando un cliente primero solicita o accede al objeto.

Un **proxy remoto** proporciona un representante local para un objeto que reside en un espacio de direcciones diferente.

Un **proxy protector** controla el acceso a un objeto maestro sensible. El objeto "sustituto" verifica que la persona que llama tenga los permisos de acceso requeridos antes de reenviar la solicitud.

Un **proxy inteligente** interpone acciones adicionales cuando se accede a un objeto. Los usos típicos incluyen:

+ Contando el número de referencias al objeto real para que pueda liberarse automáticamente cuando no haya más referencias (también conocido como puntero inteligente),
+ Cargando un objeto persistente en la memoria cuando se hace referencia por primera vez,
+ Verificar que el objeto real esté bloqueado antes de acceder a él para garantizar que ningún otro objeto pueda cambiarlo.

#### \#Check list

- [x] Identificar que tipo de proxy se necesita (contenedor o sustituto)
- [x] Crear una interfaz que permita que los objetos sean intercambiables (sustituir)
- [x] Recibir un objeto como parámetro este objeto debe implementar la interface (objeto proxy)
- [x] Especificar la implementación, ya sea validar el acceso a ciertos métodos o funcionalidad extra.


![Proxy](https://designpatternsphp.readthedocs.io/en/latest/_images/uml33.png)