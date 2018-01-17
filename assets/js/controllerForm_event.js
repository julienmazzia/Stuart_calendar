$('#timepicker_ampm_dark_2').change(function(){
	if($('#timepicker_ampm_dark_2').val()<$('#timepicker_ampm_dark_1').val()){
		$('#hour_error').show();
	}else{
		$('#hour_error').hide();
	}
});