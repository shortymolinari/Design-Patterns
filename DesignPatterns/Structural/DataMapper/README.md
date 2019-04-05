## \# Data Mapper
>:sparkles: ***Design Patters | Structural***
---
### Propósito

La interfaz de un objeto que cumple con este patrón incluiría funciones como Crear, Leer, Actualizar y Eliminar, que operan en objetos que representan tipos de entidad de dominio en un almacén de datos.

Un asignador de datos, es una capa de acceso a datos que realiza una transferencia bidireccional de datos entre un almacenamiento de datos persistentes (por lo general una base de datos relacional) y una representación de datos en memoria (la capa de dominio).

El objetivo del patrón es mantener la representación en memoria y el almacén de datos persistentes independientes entre sí y con el propio asignador de datos. La capa está compuesta por uno o más mapeadores (u objetos de acceso a datos), que realizan la transferencia de datos. Las implementaciones del mapeador varían en su alcance. Los mapeadores genéricos manejarán muchos tipos diferentes de entidades de dominio, los mapeadores dedicados manejarán uno o unos pocos.

El punto clave de este patrón es que, a diferencia del patrón de Active Record, el modelo de datos sigue el Principio de Responsabilidad Única.

