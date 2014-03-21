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
				boxInf.text("Enviando su consulta...");
				boxInf.css({"display":"block"});
				buttonSend.prop("disabled",true);
			},
            success: function(result) {
                boxInf.text(""+result);          
            }
        });
    });
});