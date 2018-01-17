$(document).ready(function(){
	var date = new Date();
	var month = date.getMonth();
	var year = date.getFullYear();
	var max_day;

	if(month == 0 || month == 4 || month == 6 || month ==7 || month ==9 || month ==11){
		max_day = 31;
	}else if (month == 2){
		if((year % 4 == false && year % 100 != true) || (year % 400 == false)){
			max_day = 29;
		}else{
			max_day = 28;
		}
	}else{
		max_day = 30;
	}

	showBlocks(max_day);

});

function showBlocks(day){
	var container = ".ligne1";
	var dayName = "lundi";
	for(i=1; i<=day; i++){
		if(i>24){
			container = ".ligne3";
		}else if(i>12){
			container = ".ligne2";
		}

		res = (i-1)%7;

		switch(res){
			case 0:
				dayName="lundi";
				break;
			case 1:
				dayName="mardi";
				break;
			case 2:
				dayName="mercredi";
				break;
			case 3:
				dayName="jeudi";
				break;
			case 4:
				dayName="vendredi";
				break;
			case 5:
				dayName="samedi";
				break;
			case 6:
				dayName="dimanche";
				break;
		}

		$(container).append("<div class='col s1 month_block'><div class='day_title center-align'>"+dayName+" "+i+"</div></div>");
	}
}