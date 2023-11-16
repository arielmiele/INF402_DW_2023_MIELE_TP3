# INF402_DW_2023_MIELE_TP3

## Objetivo

El propósito del presente trabajo es que el alumno utilice las herramientas principales relacionadas a la programación web, se familiarice con entornos de trabajo y con la estructura básica de una página web.

## Situación Problemática

Uno de los clientes a los cuales prestas servicios de desarrollo web y consultoría está solicitando una pantalla que incluya un ABM con persistencia a una base de datos utilizando el lenguaje PHP. El común denominador en las situaciones presentadas es que los clientes neecesitan un sitio web responsivo y, para ello, se adoptó el uso de la biblioteca Bootstrap (<https://getboostrap.com/>), por lo que se solicita que las páginas web del proyecto sean maquetadas utilizando dicha biblioteca.

## Consignas

Lo primero que debes hacer es elegir una entidad con la cual trabajarás y desarrollarás el ABM (altas-bajas-modificaciones). Por ejemplo: productos, personas, ventas, entre otras. El requisito es que cada registro en la base de datos debe estar compuesto por al menos 7 campos incluyendo una clave primaria autoincremental.

No se debe utilizar ningún framework, sino las extensiones y los métodos nativos de PHP. Para la conexión a la base de datos, debes utilizar PDO (PHP data objects). Crea un formulario en HTML (utilizando siempre Bootstrap) que envíe los datos al servidor. En el servidor, usarás sentencias preparadas para insertar registros en la base de datos. Por último, recupera los datos de la BD y muéstralos en una tabla HTML.

Para realizar el trabajo se recomienda tener instalado XAMPP (<https://www.apachefriends.org/es/index.html>). XAMPP es una distribución de Apache completamente gratuita y fácil de instalar que contiene MariaDB, PHP y Perl. Además, es requisito tener instalado el motor de base de datos y configurado para tal fin. Puede ser de utilidad utilizar un gestor visual de la BD como: <https://mariadb.com/kb/en/database-workbench/>

1. Genera una base de datos, la tabla solicitada con 7 campos incluyendo una clave primaria autoincremental numérica e inserta registros de prueba (mínimo 5, máximo 10). Exporta el código SQL de la base de datos incluyendo estructura y datos, comprimido como .ZIP.

2. En una planilla de cálculo, elabora un diccionario de datos de la tabla creada en el punto anterior. En el mismo documento, escribe una consulta SQL para cada acción en la tabla: insertar un registro (insert), borrar un registro (delete), actualizar un registro (update) y listar todos los registros (select).

3. Utilizando PHP, genera los archivos necesarios y la navegabilidad para: agregar datos a la tabla, borrar datos, modificar datos y listarlos (tabla HTML). Para la visualización (frontend), utiliza Bootstrap mediante CDN. Tienes libertad para generar la estructura del proyecto como desees, y la única condición es no utilizar frameworks, sino únicamente lo provisto por las extensiones y métodos nativos de PHP.
