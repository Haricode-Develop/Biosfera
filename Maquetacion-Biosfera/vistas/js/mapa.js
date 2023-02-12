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
  
    
}