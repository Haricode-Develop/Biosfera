<?php
//requerimos conexion
include_once('modelos/conexion.php');
//almacenamos en variables los datos enviados por el formulario
$nombreForm = $_POST['username'];
$apellidoForm = $_POST['userlastname'];
$correoForm = $_POST['email'];
$claveForm = $_POST['password'];
$clave2 = $_POST['password2'];
$ciudadForm = $_POST['city'];
if ($claveForm != $clave2) {
    include 'verified.not.php';
} else {
    //abrimos la conexion y hacemos el llamado, si se ejecuta perfectamente mostramos verfied.
    $conexion = new Conexion1();

    if ($conexion->insertInformation($nombreForm, $apellidoForm, $correoForm, $claveForm, $ciudadForm)) { //esta es una funcion de la clase conexion para insertar la informacion (veala detallada en conexion.php)
        include 'verified.php';
    } else { //cuando no se ejecuta correctamente lo metemos a verified.not
        include 'verified.not.php';
    }
}
//width: 100%; height: 976px;