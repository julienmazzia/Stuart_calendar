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
		if(i>28){
			container = ".ligne5";
		}else if (i>21){
			container = ".ligne4";
		}else if(i>14){
			container = ".ligne3";
		}else if(i>7){
			container = ".ligne2";
		}

		res = (i-1)%7;

		switch(res){
			case 0:
				dayName="Monday";
				break;
			case 1:
				dayName="Tuesday";
				break;
			case 2:
				dayName="Wenesday";
				break;
			case 3:
				dayName="Thursday";
				break;
			case 4:
				dayName="Friday";
				break;
			case 5:
				dayName="Saturday";
				break;
			case 6:
				dayName="Sunday";
				break;
		}

		$(container).append("<a href='../View/day?day="+dayName+" "+i+"'><div class='col s1 month_block'><div class='day_title center-align'>"+dayName+" "+i+"</div></div></a>");
	}
}