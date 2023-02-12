<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="vistas/img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="vistas/css/normalize.css">
    <link rel="stylesheet" href="vistas/css/style.css">
    <script src="https://cdn.plot.ly/plotly-2.18.0.min.js"></script>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <title>Biosfera</title>
    <?php $url = ruta::ctrRuta(); ?>
</head>

<body>

    <?php

    $ruta = null;
    $inicio = true;
    if (isset($_GET["ruta"])) {
        $ruta = $_GET["ruta"];
        if ($ruta == "registro") {
            include "modulos/registro.php";
            $inicio = false;
        } else if ($ruta == "conexion") {
            include "modulos/supe.php";
            $inicio = false;
        } else if ($ruta == "datos") {
            include "modulos/datos.registro.php";
            $inicio = false;
        }
        else if ($ruta == "prueba") {
            include "modulos/prueba.php";
            $inicio = false;
        }
    }
    if ($inicio) {
        include 'modulos/mapa.php';
    }

    ?>
</body>
<script src="vistas/js/mapa.js"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdkWYnQWnTO-3AvMWxforB2NtF2Gp0wPM&callback=initMap&libraries=places"
    async defer></script>

</html>