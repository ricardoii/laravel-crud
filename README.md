
#Ejemplo de CRUD o ABM completo en LARAVEL 4.2

Este proyecto, es un ejemplo de un CRUD o ABM sencillo, usando:

- `Como ruta, una ruta resource`
- `Un controlador completo, con los metodos index, create, edit etc`
- `Un Modelo`
- `Una Migracion con su Seed`
- `Vistas usando BLADE`

##Instalacion:

* Clonar o bajar el proyecto
* Ejecutar en terminal:
  composer install
* Crear una base de datos y configurarla en `app/config/database.php`
* Ejecutar en terminal:
  php artisan migrate --seed

Librerias usadas (se instalan al correr el comando composer install)

[JeffreyWay/Laravel-4-Generators](https://github.com/JeffreyWay/Laravel-4-Generators)
[fzaninotto/Faker](https://github.com/fzaninotto/Faker)
