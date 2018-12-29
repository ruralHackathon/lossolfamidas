 import 'bootstrap/dist/js/bootstrap.bundle.min.js';

	
$(document).ready (function () {

	$('.amodal').on('click', function () {

      	var id = $(this).find('input').val();
        console.log(5);
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



	})
