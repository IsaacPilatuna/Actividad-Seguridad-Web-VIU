## Requisitos
- Laravel 6
- Composer
- MySQL / PostgreSQL 

## Instalación
- En la base de datos de preferencia (MySQL/PostgreSQL) crear una nueva base de datos
- Clonar el proyecto
- En la raíz del proyecto correr el comando:
```markdown
composer install
```
- Para generar el archivo .env correr el comando:
```markdown
copy .env.example .env
```
- Una vez generado el archivo .env configurar la base de datos
    - DB_CONNECTION
    - DB_HOST
    - DB_PORT
    - DB_DATABASE
    - DB_USERNAME
    - DB_PASSWORD
- Una vez configurada la base de datos proceder a realizar la migración e inserción de datos mediante el comando:
```markdown
php artisan migrate --seed
```
- Para generar el key correr el comando:
```markdown
php artisan key:generate
```

## Iniciar Servidor
Para ejecutar el servidor de manera local
```markdown
php artisan serve
```

Para iniciar sesión en la aplicación se puede usar las credenciales:
```markdown
seguridadweb@campusviu.es
```
```markdown
S3gur1d4d?W3b
```

