<?php
require_once('modelos/conexion.php');
$conexion = new Conexion1();
?>
<div class="mapa-plantilla">
  <div id="logo">
    <img src="vistas/img/logo_completo.png" alt="">
  </div>

  <ul id="social-sidebar">
    <li>
      <a id="btnIcon" onclick="showPopup(popup)">
        <i class="fa-solid fa-user"></i>
        <span>Usuario</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa-solid fa-satellite-dish"></i>
        <span>Satelital</span>
      </a>
    <li>
      <a href="#">
        <i class="fa-solid fa-cloud-sun-rain"></i>
        <span>Clima</span>
      </a>
    </li>
    <li class="submenu-nav-1">
      <a onclick="showPopup(submenuEstacionesGeneral)">
        <i class="fa-solid fa-layer-group li-submenu-opciones"></i>
        <span>Opciones</span>
      </a>
      <ul class="submenus-nav">
        <li class=""><a class="extender" style="width:100%;">Estacion 1</a>
          <ul id="submenuEstaciones1" class="submenus-nav-menu-2" style="">
            <li><a id="btnIcon" onclick="showPopup(temperatura)" style="width:100%;">Temperatura</a></li>
            <li><a id="btnIcon" onclick="showPopup(humedad_porcentaje)" style="width:100%;">Humedad</a></li>
            <li><a id="btnIcon" onclick="showPopup(velocidad_viento)" style="width:100%;"> Velocidad del
                Viento</a></li>
            <li><a id="btnIcon" onclick="showPopup(direccion_viento)" style="width:100%;">Direccion del Viento</a>
            </li>
          </ul>
        </li>
        <li class=""><a class="extender" style="width:100%;" onclick="showPopup(submenuEstaciones2)">Estacion 2</a>
          <ul id="submenuEstaciones2" class="submenus-nav-menu-2" style="">
            <li><a id="btnIcon" onclick="showPopup(temperatura)" style="width:100%;">Temperatura</a></li>
            <li><a id="btnIcon" onclick="showPopup(humedad_porcentaje)" style="width:100%;">Humedad</a></li>
            <li><a id="btnIcon" onclick="showPopup(velocidad_viento)" style="width:100%;"> Velocidad del
                Viento</a></li>
            <li><a id="btnIcon" onclick="showPopup(direccion_viento)" style="width:100%;">Direccion del Viento</a>
            </li>
          </ul>
        </li>
        <li class=""><a class="extender" style="width:100%;"onclick="showPopup(submenuEstaciones3)">Estacion 3</a>
          <ul id="submenuEstaciones3" class="submenus-nav-menu-2" style="top: 104px;">
            <li><a id="btnIcon" onclick="showPopup(temperatura)" style="width:100%;">Temperatura</a></li>
            <li><a id="btnIcon" onclick="showPopup(humedad_porcentaje)" style="width:100%;">Humedad</a></li>
            <li><a id="btnIcon" onclick="showPopup(velocidad_viento)" style="width:100%;"> Velocidad del
                Viento</a></li>
            <li><a id="btnIcon" onclick="showPopup(direccion_viento)" style="width:100%;">Direccion del Viento</a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>

  <ul id="datos-actuales">
    <li class="datos-actuales-li">
      <h1>Datos Actuales</h1>
    </li>

    <?php //$clase->datosVentanaPrincipal('Temperatura') ?>
    <li>
      <i class="fa-solid fa-temperature-three-quarters"></i>
      <?php echo ($conexion->datosVentanaPrincipal('Temperatura')); ?>°C
    </li>
    <li><i class="fa-solid fa-cloud-rain"></i>
      <?php echo ($conexion->datosVentanaPrincipal('Humedad_porcentaje')); ?> %
    </li>
    <li><i class="fa-solid fa-droplet"></i>
      <?php echo ($conexion->datosVentanaPrincipal('Humedad_relativa')); ?> %
    </li>
    <li><i class="fa-solid fa-wind"></i>
      <?php echo ($conexion->datosVentanaPrincipal('Velocidad_viento')); ?> Km/h
    </li>
    <li><i class="fa-solid fa-arrow-right"></i>
      <?php echo ($conexion->datosVentanaPrincipal('Direccion_viento')); ?>
    </li>
  </ul>
  <div id="info">
    <i class="fa-solid fa-circle-info"></i>
  </div>




  <?php //seccion de popup?>
  <div class="contenedor">
    <div class="overlay" id="overlay">
      <div class="popup" id="popup">
        <h3>Inicio de Sesión</h3>
        <form action="" class="formulario">
          <fieldset>
            <div class="contenedor-inputs">
              <div class="campo">
                <label>Usuario</label>
                <input class="input-text" type="text">
              </div>

              <div class="campo">
                <label>Contraseña</label>
                <input class="input-text" type="password">
              </div>
            </div> <!-- .contenedor-inputs -->

            <a class="enlace" href="#">¿Olvidaste tu contraseña?</a>
            <input type="submit" class="btn-submit" value="ingresar">
            <a class="enlace" href="registro">¿No tienes cuenta?, Regístrate aquí</a>
          </fieldset>
        </form>
      </div>
    </div>
  </div>

  <div class="contenedor">
    <div class="overlay" id="overlay">
      <div popup="pop1" class="humedad_porcentaje popup" id="humedad_porcentaje">
        <h3>Porcentaje de Humedad</h3>
        <div class="popup-datos">
          <p style="font-size:12px;">Ultimas 24 horas</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('Humedad_porcentaje')); ?>%
          </p>
          <p style="font-size:12px;">Ultimas hora</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('Velocidad_viento')); ?> KM/H
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="contenedor">
    <div class="overlay" id="overlay">
      <div popup="pop2" class="velocidad_viento popup" id="velocidad_viento">
        <h3>Velocidad del Viento</h3>
        <div class="popup-datos">
          <p style="font-size:12px;">Ultimas 24 horas</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('Velocidad_viento')); ?> KM/H
          </p>
          <p style="font-size:12px;">Ultimas hora</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('Velocidad_viento')); ?> KM/H
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="contenedor">
    <div class="overlay" id="overlay">
      <div popup="pop3" class="direccion_viento popup" id="direccion_viento">
        <h3>Direccion del Viento</h3>
        <div class="popup-datos">
          <p style="font-size:12px;">Ultimas 24 horas</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('Direccion_viento')); ?>
          </p>
          <p style="font-size:12px;">Ultimas hora</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('Direccion_viento')); ?>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="contenedor">
    <div class="overlay" id="overlay">
      <div popup="pop4" class="temperatura popup" id="temperatura">
        <h3>Temperatura</h3>
        <div class="popup-datos">
          <p style="font-size:12px;">Ultimas 24 horas</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('Temperatura')); ?>°C
          </p>
          <p style="font-size:12px;">Ultimas hora</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('Temperatura')); ?>°C
          </p>
        </div>
      </div>
    </div>
  </div>



  <?php //termina seccion popups?>

  <div id="mapa_div">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15403.393733429206!2d-89.67544292033391!3d15.166666280273581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f618cfeb35cd9bf%3A0x5b11e2e2db4acef0!2sSierra%20de%20las%20Minas!5e0!3m2!1ses-419!2sgt!4v1671550207910!5m2!1ses-419!2sgt"
      style="border:0; width: 100%; height: 100vh; margin:0; padding: 0; " allowfullscreen="true" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>

  <script src="vistas/js/main.js"></script>