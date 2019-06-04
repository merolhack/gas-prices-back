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

## Base de datos

Esquema de la base de datos:

```sql
CREATE TABLE `zip-codes` (
  `d_codigo` varchar(5) NOT NULL,
  `d_asenta` varchar(100) NOT NULL,
  `d_tipo_asenta` varchar(30) NOT NULL,
  `d_mnpio` varchar(100) NOT NULL,
  `d_estado` varchar(100) NOT NULL,
  `d_ciudad` varchar(100) NOT NULL,
  `d_cp` varchar(5) NOT NULL,
  `c_estado` varchar(100) NOT NULL,
  `c_oficina` varchar(100) NOT NULL,
  `c_cp` varchar(100) NOT NULL,
  `c_tipo_asenta` varchar(100) NOT NULL,
  `c_mnpio` varchar(100) NOT NULL,
  `id_asenta_cpcons` varchar(100) NOT NULL,
  `d_zona` varchar(100) NOT NULL,
  `c_cve_ciudad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for table `zip-codes`
--
ALTER TABLE `zip-codes`
  ADD KEY `c_estado` (`c_estado`),
  ADD KEY `c_mnpio` (`c_mnpio`);
COMMIT;
````

## Referencias

* [Deploying a PHP and MySQL Web App with Heroku](https://scotch.io/@phalconVee/deploying-a-php-and-mysql-web-app-with-heroku)
* [Getting Started with Laravel on Heroku](https://devcenter.heroku.com/articles/getting-started-with-laravel)
* [Configuration and Config Vars](https://devcenter.heroku.com/articles/config-vars)
* [Steps to enable CORS on a Lumen API Backend](https://www.codementor.io/chiemelachinedum/steps-to-enable-cors-on-a-lumen-api-backend-e5a0s1ecx)
