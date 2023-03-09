<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('memory_limit', '1024M'); // or you could use 1G
require_once "controladores/biosfera.controlador.php";
require_once "modelos/biosfera.modelo.php";
require_once "modelos/rutas.php";
$plantilla = new controladorBiosfera();
$plantilla->plantilla();