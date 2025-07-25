# Prueba técnica UNAB
Evaluación técnica para el puesto de programador analista, utilizando framework Laravel versión 12 junto con Livewire.

## Parte 1
Al momento de clonar el repositorio, se deben ejecutar los comandos siguientes, uno a la vez, esto traera las dependencias de PHP y JS y generara las tablas en la base de datos creada junto con las credenciales proporcionadas que se ponen en las variables de entorno (candidato1)

```sh
composer update
npm install
php artisan migrate:fresh --seed
```

Lo primero que veremos es la vista de registro para crear una cuenta e iniciar sesión.

Luego proceder a la vista donde se encuentra el formulario junto con los datos de los estudiantes con sus asignaturas inscritas, donde podemos gestionar el crear un nuevo registro de matrícula pidiendo los datos de código de asignatura y el carnet del estudiante.
