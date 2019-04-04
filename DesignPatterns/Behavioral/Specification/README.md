## \# Specification
>:sparkles: ***Design Patters | Behavioral***
---
### Propósito
Construir una especificación clara de las reglas de negocios, donde los objetos se pueden verificar. La clase de especificación compuesta tiene un método llamado ***`isSatisfiedBy()`*** que devuelve verdadero o falso dependiendo de si el objeto dado satisface la especificación.
- Según la necesidad se pueden crear especificaciones muy genéricas o concretas
- Ayuda diferentes reglas que resuelven un problema concreto de formas distintas
- Crear diferentes normas de negocio que pueden ser combinadas
- Se usa con frecuencia en el contexto de Domain-Drive Design (DDD)
    + Conexión profunda entre la implementación y los conceptos del modelo y núcleo del negocio

### Algunos usos
- Hacer afirmaciones (validación) sobre un objeto;
- Buscar objetos que coincidan con ciertos criterios de una colección (selección);
- Especifique cómo se debe crear un objeto (construcción a pedido). 

### Ejemplos de especificaciones

- **InvoiceIsOverdue** si no se paga en la fecha asignada
- **CustomerIsPremium** si tiene> = 3 pedidos
- **EmployeeIsDevelopper** si su título de trabajo es "desarrollador"
- **EmployeeHasLowSalary** si su salario es <35000 $ 

#### Diagrama
![Specification](https://designpatternsphp.readthedocs.io/en/latest/_images/uml7.png)