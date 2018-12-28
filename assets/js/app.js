import 'bootstrap/dist/js/bootstrap.bundle.min.js';

$(document).ready(function() {  
   
    var marcadores = [];

    function mapaGoogle() {
      
      var localidades = [
        ['<h1>tumbas antropomórficas</h1>'+
        '<p>Tumbas mitologicas y antropomórficas del año 100 a.C.</p>'+
        '<img class="img-etiqueta" src="http://www.portoenorte.pt/fotos/oquefazer/1476437374.1259_8708103095a61ef156ef7f.jpg">', 39.218308, -7.002342],
        ['paseo de la alameda', 39.219249, -7.000578],
        ['paseo de las laderas', 39.216670, -7.003125]
      ];
      
      var mapa = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 7,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      
      var limites = new google.maps.LatLngBounds();
      
      var infowindow = new google.maps.InfoWindow();
      
      var marcador, i;
      
      for (i = 0; i < localidades.length; i++) {
        
        marcador = new google.maps.Marker({
          position: new google.maps.LatLng(localidades[i][1], localidades[i][2]),
          map: mapa
        });
        
        marcadores.push(marcador);
        
        limites.extend(marcador.position);
        
        google.maps.event.addListener(marcador, 'click', (function(marcador, i) {
          return function() {
            infowindow.setContent(localidades[i][0]);
            infowindow.open(mapa, marcador);
          }
        })(marcador, i));
      }
      
      mapa.fitBounds(limites);
      
    }
    
    google.maps.event.addDomListener(window, 'load', mapaGoogle);
    
});
