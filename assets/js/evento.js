import 'bootstrap/dist/js/bootstrap.bundle.min.js';
	
$(document).ready (function () {

	$('.amodal').on('click', function () {
      	var id = $(this).find('input').attr('value');
       
        $.ajax({
        		type: 'POST',
			    url: '/eventos/'+id+'/json',
			    dataType: 'json',
			    success: function (datos) { 

			    	//Rellenar el modal con los datos

			    	$('.modal-body > img').attr('src',(datos.url));
			    	$('.modal-title').text(datos.titular);
			    	$('.modal-body > p').text(datos.texto);

					//Mostar el modal
					$('#myModal').modal('show');

			    },
			    error: function() {
			    	console.log( "La solicitud no se ha completado correctamente." );
			    }

			});

		});


});
