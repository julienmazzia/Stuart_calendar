$(document.ready).ready(function(){
	fillPreview();
	$('.modal').modal();
	$('select').material_select();
	$('#hourZone5').append('<div class="event_block popup" onclick="myFunction()">'+
		'<div class="row"><div class="col s4">Meeting</div> <div class="col s5 offset-s3">2:30 - 2:45</div></div>'
		+'<span class="popuptext" id="myPopup"> Description</span></div>');

});

function fillPreview(){
	hour1=0;
	hour2=0;

	for(i=0; i<48; i++){
		if(hour2==0){
			hour=hour1+":0"+hour2;
			hour2+=30;
		}else{
			hour=hour1+":"+hour2;
			hour2=0;
			hour1++;
		}
		$('#preview_background').append('<div class="hourZone" id=hourZone'+i+'><div class="hour">'+hour+'</div></div>');
	}
}

function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}