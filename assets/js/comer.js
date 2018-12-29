import 'bootstrap/dist/js/bootstrap.bundle.min.js';  
$(document).ready (function () {
  $('.amodal').on('click', function () {
    $("#mimodal").modal()
        console.log(this);
        var id = $(this).find('input').attr('value');
        console.log(id);
        $.ajax({
          method: "get",
          data: {},
          url: "/comer/"+id+"/json",
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
