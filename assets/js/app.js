import 'bootstrap/dist/js/bootstrap.bundle.min.js';

$(document).ready(function() {  
   
    var marcadores = [];

    function mapaGoogle() {
      
      var localidades = []
      $.ajax({
        url: '/mapa/coordenadas',
        dataType: 'json',
        success: function(datos) {
            
          //console.log(datos);
            
            $.each(datos.lugares, function(k, v) {
                localidades.push([v.monumento, v.coordenadas.latitud, v.coordenadas.longitud, v.url, v.descripcion]);
                
            });    
            
      
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
                  infowindow.setContent('<a href="https://www.google.com.br/maps/dir/'+localidades[i][1]+','+localidades[i][2]+'/@'+localidades[i][1]+','+localidades[i][2]+'"><h3>'+localidades[i][0]+'</h3>'+'<p>'+localidades[i][4]+'</p>'+'<img class="img-map" src="'+localidades[i][3]+'"></a>');
                  infowindow.open(mapa, marcador);
                }
              })(marcador, i));
            }
            
            mapa.fitBounds(limites);

        }

        
      });
      
      
    }
    
    google.maps.event.addDomListener(window, 'load', mapaGoogle);
    
});
