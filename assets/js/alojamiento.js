import 'bootstrap/dist/js/bootstrap.bundle.min.js';  
<<<<<<< HEAD

$(document).ready (function () {

	$('.amodal').on('click', function () {
      	var id = $(this).find('input').attr('value');
       
        $.ajax({
        		type: 'POST',
			    url: '/alojamiento/'+id+'/json',
			    dataType: 'json',
			    success: function (datos) { 

			    	//Rellenar el modal con los datos

			    	$('.modal-body > img').attr('src',(datos.url));
			    	$('.modal-title').text(datos.nombre);
            $('.modal-body > p').text(datos.descripcion);
            $('#mimodal .text-muted').text(datos.direccion);

					//Mostar el modal
					$('#myModal').modal('show');

			    },
			    error: function() {
			    	console.log( "La solicitud no se ha completado correctamente." );
			    }

			});

		});


});
=======
$(document).ready (function () {
  $('.amodal').on('click', function () {
    $("#mimodal").modal()
        console.log(this);
        var id = $(this).find('input').attr('value');
        console.log(id);
        $.ajax({
          method: "get",
          data: {},
          url: "/alojamiento/"+id+"/json",
          dataType: "json",
          success: function (datos) { 
            //Rellenar el modal con los datos
            $('#mimodal img').attr('src',(datos.url));
            $('#mimodal h5').text(datos.nombre);
            $('#mimodal p').text(datos.descripcion);
            $('#mimodal .text-muted').text(datos.direccion);
          //Mostar el modal
          $('#mimodal').modal('show');
          }
    });
  });
})
>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
