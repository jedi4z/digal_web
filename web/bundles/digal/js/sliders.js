/* ======== carousel's scripts ======== */

sliderInt = 1;
SliderNext = 2;

$(document).ready(function(){
	$("#slider > img#slider1").fadeIn(700);
	startSlider();
});

function startSlider(){
	count = $("#slider > img").size();
	loop = setInterval(function(){			
			if (SliderNext > count){
				SliderNext = 1;
				sliderInt = 1;
			}	
			$("#slider > img").fadeOut(700);
			$("#slider > img#slider" + SliderNext).fadeIn(700);
			sliderInt = SliderNext;
			SliderNext = SliderNext +1;
	},5000);
}