// Form contact
$(document).ready(function(){
  $("#formContact").submit(function(event){
    event.preventDefault();
    var postData = $(this).serializeArray();
  	var formURL = $(this).attr("action");
  	var boxInf = $("#boxInf");
  	var inputName = $(".inputName");
  	var inputEmail = $(".inputEmail");
  	var textConsult = $(".textConsult");
  	var buttonSend = $("#buttonSend");
    $.ajax({
      url: formURL,
      type: "POST",
  		data : postData,
  		beforeSend: function (){
  			buttonSend.prop('value', 'Enviando...');				
  			buttonSend.prop("disabled",true);
  		},
      success: function(result) {
      	boxInf.fadeIn("slow");
        boxInf.text(""+result);
        buttonSend.prop("disabled",false);
        buttonSend.prop('value', 'Enviar');          
      }
    });
  });
});

// Menu mobile
$(document).ready(function(){
  $('#mobile-menu').click(function(event){
    event.preventDefault();
    if ($('#wrapper-navbar').is(':hidden')){
      $('#wrapper-navbar').slideDown(200);
    }else {
       $('#wrapper-navbar').slideUp(200);
    }
  });
});