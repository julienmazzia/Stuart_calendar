$(document.ready).ready(function(){
	fillPreview();
	$('.modal').modal();
	$('select').material_select();
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
		$('#preview_background').append('<div class="hourZone"><div>'+hour+'</div></div>');
	}
}