import 'bootstrap/dist/js/bootstrap.bundle.min.js';
console.log('hola');
$(document).ready(function() {  

  //evento
  $('.amodal').on('click', function () {
		console.log(this);
      	var id = $(this).find('input').attr('value');
        console.log(id);
        $.ajax({
			    method: "get",
			    data: {},
			    url: "/eventos/"+id+"/json",
			    dataType: "json",
			    success: function (datos) { 

			    	//Rellenar el modal con los datos			    
			    	$('.col-md-7 img').attr('src',(datos.url));
			    	$('.col-md-5 h5').text(datos.titular);
			    	$('.col-md-5 p:nth-of-type(1)').text(datos.texto);
			    	
					console.log( "La solicitud se ha completado correctamente." );

					//Mostar el modal
					$('#myModal').modal('show');

			    }

			});

		});



  
    //mapa
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
                  infowindow.setContent('<h3>'+localidades[i][0]+'</h3>'+'<p>'+localidades[i][4]+'</p>'+'<img class="img-map" src="'+localidades[i][3]+'"><p><hr><a href="https://www.google.com.br/maps/dir/'+localidades[i][1]+','+localidades[i][2]+'/@'+localidades[i][1]+','+localidades[i][2]+'"><button type="button" class="btn btn-success">Ir a Google Maps</button></a></p>');
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
