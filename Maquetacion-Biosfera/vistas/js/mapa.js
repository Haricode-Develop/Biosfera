var map;

function initMap() {

    // Create map
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 14.7666661, lng: -91.264618},
        zoom: 15        
    });

  
    // Array to hold search options
    var markers = [];
    
    var infowincontent = '<div style="width:200px">CONTENT</div>';

     // Clinton Pullout Marker

  function Markers(latitud, longitud, titulo, info){ //Crea los marcadores del mapa
    var marker0 = new google.maps.Marker({
        position: {lat: latitud, lng: longitud},
        map: map,
        title: titulo,        
        animation: google.maps.Animation.DROP,    
        icon: 'vistas/img/punto.png'
    });

    var infowindow0 = new google.maps.InfoWindow({
        content: infowincontent.replace('CONTENT',
          info
        )
      });

      marker0.addListener('click', function() {
        infowindow0.open(map, marker0);
      });
  }

  Markers(14.7666661, -91.264618, 'Estacion 1', 'Primer Estación de Instituo Bisofera')
  Markers(14.595364,-90.515357, 'Próceres I', 'Centro Comercial Los Próceres, Primer Nivel.')
  Markers(14.599715, -90.514774, 'Zona Viva', '2 avenida 12-74, Zona 10.')
  Markers(14.598302, -90.507781, 'Oakland Mall', 'Centro Comercial Oakland Mall, Nivel 3.')
  Markers(14.602557, -90.509540, 'Las Margaritas', 'Centro Gerencial Las Margaritas, Torre II, 1er. Nivel.')
  Markers(16.913174, -89.875870, 'Petén', 'Centro Comercial Metroplaza Mundo Maya, Primer Nivel')
  Markers(15.587991, -91.676069, 'Huehuetenango', 'Calzada Kaibil Balam, Sector No. 1 El Cambote Zona 11 Municipio de Huehuetenango')
  Markers(15.716667, -88.583333, 'Puerto Barrios', 'Centro Comercial Pradera Puerto Barrios')
  Markers(15.470440, -90.376080, 'Cobán', '1a. Calle 15-12, Zona 2 CC Plaza Magdalena Cobán Alta Verapaz')
  Markers(15.470830, -90.370830, 'Cobán Centro', 'Centro Comercial Plaza Del Parque, 1 calle 3-13 zona 1, Cobán, Alta Verapaz')
  Markers(15.030850, -91.148710, 'Quiché - Calzada Centenario', '2a Avenida 20-22, zona 4 Calzada Centenario Santa Cruz del Quiché')
  Markers(14.836156, -91.521959, 'Xela Centro', 'Centro esquina de la 11 Ave. Entre 4a. Y 5a. Calle Zona 1 Edif. Rivera Quetzaltenango')
  Markers(14.861094, -91.550440, 'Interplaza Xela', 'Kilómetro 205 Carretera a San Marcos, La Esperanza C.C. Interplaza Xela - Locales C1 y C2')
  Markers(14.850737, -91.533630, 'Pradera Xela', 'Centro Comercial La Pradera Xela')
  Markers(14.838705, -91.506860, 'Marimba', '7ª avenida 7-39 Zona 2, Quetzaltenango')
  Markers(14.972220, -89.530560, 'Zacapa', '1 calle 17 avenida final zona 1 Barrio Nuevo Centro comercial La Pradera Zacapa')

    
}