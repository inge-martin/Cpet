// Comprobar usuario
$(document).ready(function(){

  var consulta;

  //comprobamos si se pulsa una tecla
  $("#usuario").keyup(function(e){
    //obtenemos el texto introducido en el campo
    consulta = $("#usuario").val();

    $("#resultado1").html("<img src="+baseurl+"assets/ajax-loader.gif />");
    //hace la búsqueda
    $("#resultado1").delay(1000).queue(function(n) {      

      $.ajax({
        type: "POST",
        url: baseurl + "Validar/validarUser",
        data: "usuario="+consulta,
        dataType: "html",
        error: function(){
          alert("error petición ajax");
        },
        success: function(data){                                                      
          $("#resultado1").html(data);
          n();
        }
      });
    });
  });
});