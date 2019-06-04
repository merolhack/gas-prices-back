# gas-prices-back

> Sepomex Postal Codes & Gas Prices API with Slim + MySQL Database

Las rutas de este proyecto se encuentran en:

* routes/web.php

## Documentación

* [Lumen - Installation](https://lumen.laravel.com/docs/5.8)
* [Laravel - Database: Query Builder](https://laravel.com/docs/5.8/queries)

## Dependencias

El proyecto ha sido desarrollado con:

* laravel/lumen: v5.8.0
* guzzlehttp/guzzle: 6.3

## Pasos de instalación

```bash
composer create-project --prefer-dist laravel/lumen gas-prices-back
composer require guzzlehttp/guzzle
````

Es necesario darle permisos de escritura al siguiente directorio:

```bash
chmod 777 storage/logs
````

Es necesario modificar los datos de conexión con la base de datos en el archivo:

* .env
  * DB_CONNECTION
  * DB_HOST
  * DB_PORT
  * DB_DATABASE
  * DB_USERNAME
  * DB_PASSWORD

En ese mismo archivo se debe deshabilitar el modo estricto de MySQL:

* DB_STRICT_MODE=false
