# registrophpmysql
Registro de Empleados hecho con PHP y el gestor de Base de Datos MySQL

Lo que será realizado para el uso de este aplicativo es:
 
 1. Crear una base de datos: "NombreBaseDeDatos"
 2. Crear una tabla llamada "Empleados" con el siguiente código desde el phpMyAdmin:
 
 CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(300) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT;

3. Ahora será el momento de modificar el archivo "conexion.php" el cual se encuentra en la carpeta "app":
<?php
$nombreservidor = "localhost"; //el nombre de su servidor
$nombreusuario = "root"; // el nombre del usuario de entrada a phpMyAdmin
$contrasenia = "su contraseña"; //contraseña phpMyAdmin
$basededatos = "NombreBaseDeDatos"; //nombre de su base de datos

*Habiendo realizado estas modificaciones, quedamos listos para realizar el uso de este Aplicativo Web!
Espero que podamos trabajar para mejorarlo!
