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
      <lord-icon src="https://cdn.lordicon.com/ajkxzzfb.json" trigger="hover"></lord-icon>
        <span>Usuario</span>
      </a>
    </li>
    <li>
      <a href="#">
      <lord-icon src="https://cdn.lordicon.com/psaebtij.json" trigger="hover"></lord-icon>
        <span>Satelital</span>
      </a>
    <li>
      <a href="#">
      <lord-icon src="https://cdn.lordicon.com/qrodhbts.json" trigger="hover"></lord-icon>
        <span>Clima</span>
      </a>
    </li>
    <li class="submenu-nav-1">
      <a onclick="showPopup(submenuEstacionesGeneral)">
      <lord-icon src="https://cdn.lordicon.com/txmlvqat.json" trigger="hover"></lord-icon>
        <span>Opciones</span>
      </a>
      <ul class="submenus-nav" id="idEstaciones-menu">
        <li class=""><a  class="extender submenus-nav-high" style="width:100%;" onclick="showPopup(submenuEstaciones2)">Estacion 1</a>
          <ul id="submenuEstaciones2" style="width:100%;" class="submenus-nav-menu-2" >
            <li><a class="submenus-nav-high" id="btnIcon" onclick="showPopup(temperatura)" style="width:100%;">Temperatura</a></li>
            <li><a id="btnIcon" onclick="showPopup(humedad_porcentaje)" style="width:100%;">Humedad</a></li>
            <li><a id="btnIcon" onclick="showPopup(velocidad_viento)" style="width:100%;"> Velocidad del
                Viento</a></li>
            <li><a class="submenus-nav-low" id="btnIcon" onclick="showPopup(direccion_viento)" style="width:100%;">Direccion del Viento</a>
            </li>
          </ul>
        </li>
        <li class=""><a class="extender" style="width:100%;" onclick="showPopup(submenuEstaciones2)">Estacion 2</a>
          <ul id="submenuEstaciones2" class="submenus-nav-menu-2">
            <li><a class="submenus-nav-high" id="btnIcon" onclick="showPopup(temperatura)" style="width:100%;">Temperatura</a></li>
            <li><a id="btnIcon" onclick="showPopup(humedad_porcentaje)" style="width:100%;">Humedad</a></li>
            <li><a id="btnIcon" onclick="showPopup(velocidad_viento)" style="width:100%;"> Velocidad del
                Viento</a></li>
            <li><a class="submenus-nav-low" id="btnIcon" onclick="showPopup(direccion_viento)" style="width:100%;">Direccion del Viento</a>
            </li>
          </ul>
        </li>
        <li class=""><a  class="extender submenus-nav-low" style="width:100%;"onclick="showPopup(submenuEstaciones3)">Estacion 3</a>
          <ul id="submenuEstaciones2" class="submenus-nav-menu-2" style="top: 104px;">
            <li><a class="submenus-nav-high" id="btnIcon" onclick="showPopup(temperatura)" style="width:100%;">Temperatura</a></li>
            <li><a id="btnIcon" onclick="showPopup(humedad_porcentaje)" style="width:100%;">Humedad</a></li>
            <li><a id="btnIcon" onclick="showPopup(velocidad_viento)" style="width:100%;"> Velocidad del
                Viento</a></li>
            <li><a class="submenus-nav-low" id="btnIcon" onclick="showPopup(direccion_viento)" style="width:100%;">Direccion del Viento</a>
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
      <?php echo ($conexion->datosVentanaPrincipal('temperature')); ?>°C
    </li>
    <li><i class="fa-solid fa-cloud-rain"></i>
      <?php echo ($conexion->datosVentanaPrincipal('humidity') ?> %
    </li>
    <li><i class="fa-solid fa-droplet"></i>
      <?php echo ($conexion->datosVentanaPrincipal('humidity') ?> %
    </li>
    <li><i class="fa-solid fa-wind"></i>
      <?php echo ($conexion->datosVentanaPrincipal('windspeed')); ?> Km/h
    </li>
    <li><i class="fa-solid fa-arrow-right"></i>
      <?php echo ($conexion->datosVentanaPrincipal('winddirection')); ?>
    </li>
  </ul>
  <div id="info">
    <i class="fa-solid fa-circle-info"></i>
  </div>




  <?php //seccion de popup?>
  <div class="contenedor">
    <div class="overlay" id="overlay">
      <div class="popup" id="popup">
      <div class="exit"> <a class="exit-a" onclick="showPopup(popup)"><img src="vistas/img/exit.svg" alt="exit"></a></div>
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
    
      <div popup="pop1" class="humedad_porcentaje popup" id="humedad_porcentaje" style="width: 18.5rem;margin-top: 5rem;">
      <div class="exit"> <a class="exit-a" onclick="showPopup(humedad_porcentaje)"><img src="vistas/img/exit.svg" alt="exit"></a></div>
        <h3>Porcentaje de Humedad</h3>
        <div class="popup-datos">
          <div id="humdGraph" style="height:300px; width:300px; margin:0;"></div>
          <p style="font-size:12px;">Ultimas 24 horas</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('humidity')); ?>%
          </p>
          <p style="font-size:12px;">Ultimas hora</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('windspeed')); ?> KM/H
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="contenedor">
    <div class="overlay" id="overlay">
      <div popup="pop2" class="velocidad_viento popup" id="velocidad_viento">
      <div class="exit"> <a class="exit-a" onclick="showPopup(velocidad_viento)"><img src="vistas/img/exit.svg" alt="exit"></a></div>
        <h3>Velocidad del Viento</h3>
        <div class="popup-datos">
          <p style="font-size:12px;">Ultimas 24 horas</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('windspeed')); ?> KM/H
          </p>
          <p style="font-size:12px;">Ultimas hora</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('windspeed')); ?> KM/H
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="contenedor">
    <div class="overlay" id="overlay">
      <div popup="pop3" class="direccion_viento popup" id="direccion_viento">
      <div class="exit"> <a class="exit-a" onclick="showPopup(direccion_viento)"><img src="vistas/img/exit.svg" alt="exit"></a></div>
        <h3>Direccion del Viento</h3>
        <div class="popup-datos">
          <p style="font-size:12px;">Ultimas 24 horas</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('winddirection')); ?>
          </p>
          <p style="font-size:12px;">Ultimas hora</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('winddirection')); ?>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="contenedor">
    <div class="overlay" id="overlay">
      <div popup="pop4" class="temperatura popup" id="temperatura" style="width: 18.5rem;margin-top: 5rem;">
      <div class="exit"> <a class="exit-a" onclick="showPopup(temperatura)"><img src="vistas/img/exit.svg" alt="exit"></a></div>
        <h3>Temperatura</h3>        
        <div class="popup-datos">
        <div id="tempGraph" style="height:300px; width:300px; margin:0;"></div>
          <p style="font-size:12px;">Ultimas 24 horas</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('temperature')); ?>°C
          </p>
          <p style="font-size:12px;">Ultimas hora</p>
          <p>
            <?php echo ($conexion->datosVentanaPrincipal('temperature')); ?>°C
          </p>
        </div>
      </div>
    </div>
  </div>



  <?php //termina seccion popups?>

  <div id="mapa_div">
  <div id="map"></div>     

  </div>

  <script src="vistas/js/main.js"></script>

  <?php     
    $tiempos = $conexion->getTime();
    $temp    = $conexion->getDatos(2);
    $humedad    = $conexion->getDatos(3);
  ?>

<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var rawData=<?php echo json_encode($temp);?>;    
    var rawHumedad=<?php echo json_encode($humedad);?>;
    var rawTime=<?php echo json_encode($tiempos);?>;    
    TEMPGRAPH = document.getElementById('tempGraph');
    HUMEDADGRAPH = document.getElementById('humdGraph');
    // Mostramos los valores del array
    var dataTemp = [];    
    var tiempos = [];
    var dataHumedad =[];
    for(var i=0;i<rawData.length;i++)
    {
        dataTemp.push(rawData[i][0]);
        tiempos.push(rawTime[i][0]);
        dataHumedad.push(rawHumedad[i][0]);
    }
    console.log(dataTemp);
    Plotly.newPlot( TEMPGRAPH, [{
	  x: tiempos,
	  y: dataTemp }], {
	  margin: { t: 0 } } );

    Plotly.newPlot( HUMEDADGRAPH, [{
	  x: tiempos,
	  y: dataHumedad }], {
	  margin: { t: 0 } } );
</script>