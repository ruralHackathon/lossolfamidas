import 'bootstrap/dist/js/bootstrap.bundle.min.js';
<<<<<<< HEAD
=======


>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
	
$(document).ready (function () {

	$('.amodal').on('click', function () {
      	var id = $(this).find('input').attr('value');
<<<<<<< HEAD
       
=======
        console.log(id);

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
        $.ajax({
        		type: 'POST',
			    url: '/eventos/'+id+'/json',
			    dataType: 'json',
			    success: function (datos) { 

<<<<<<< HEAD
			    	//Rellenar el modal con los datos

			    	$('.modal-body > img').attr('src',(datos.url));
			    	$('.modal-title').text(datos.titular);
			    	$('.modal-body > p').text(datos.texto);
=======
			    	//Rellenar el modal con los datos			    
			    	
			    	$('.col-md-5 h5').text(datos.titular);
			    	$('.col-md-5 p:nth-of-type(1)').text(datos.texto);
			    	
					console.log( "La solicitud se ha completado correctamente." );
>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e

					//Mostar el modal
					$('#myModal').modal('show');

			    },
			    error: function() {
			    	console.log( "La solicitud no se ha completado correctamente." );
			    }

			});

		});


});
