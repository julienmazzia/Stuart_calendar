
	<div class="row light-1">
		<h3 class="col s8 offset-l1">I'm welcome to Stuart, what does it mean ?</h3>
		<a href="../Account/login" class="col account"><button class="btn">Sign in</button></a>
	    <a href="../Account/createAccount" class="col account"><button class="btn">Join us !</button></a>
	</div>

	<div class="border dark-1 shadow-bottom"></div>

	<!--<div class="parallax-container" id="par1">
      	<div class="parallax"><img src="../<?php base_url(); ?>assets/images/background6.jpg"></div>
    </div>-->

    <div class="background_section row text-padding light-3">
	    	
    	<img class="col s4 offset-s1 img-top" src="../<?php base_url(); ?>assets/images/ipad.png">

		<div class="col s6 offset-s1 section">
		    <h4 class="bold">Stuart is more than a calendar, it is the calendar !</h4> 
		    <h5>Stuart assemble the forces of different calendars, always to be faster, easy to handle and to have preview of your actions.</h5>
		    <h5 class="bold">It had never be so simple to organize your life !</h5>
		</div>
    </div>

    <div class="border dark-1 shadow-bottom"></div>

    <div class="background_section row light-2">
    	<div class="col s6 section">
    		<h4 class="bold">High visibility</h4>
    		<h5>With Stuart, you can easely see your events in the day.</h5>
    		<h5>You can change the duration by simply resize him. More quick solutions to see !</h5>
    	</div>
    	<img class="col s5 img-top" src="../<?php base_url(); ?>assets/images/planning.png">
    </div>

    <div class="border dark-2 shadow-bottom"></div>

    <div class="parallax-container" id="par2">
        <div class="row">
    		<h4 class="parallax-title col s3">With Stuart you can add any type of appointment, any time, anywhere. </br>With just some click !</h4>
        </div>
      <div class="parallax"><img src="../<?php base_url(); ?>assets/images/add.png"></div>
	</div>

	<div class="border dark-1 shadow-top"></div>

	<div class="row light-3" style="padding-top: 2vh;">
      	<div class="col s6 offset-s1 section">
		    <h4 class="bold">Adaptive calendar</h4> 
		    <h5>Stuart always adapt himself to your needs. You can add a large panel of event to it, have color visibility, create new type of event, ...</h5>
		    <h5 class="bold">Everything is designed to be faster as it can be.</h5>
		    <!--<h5>I had, for a long time, used different calendars in my life. But I always had many problems </br><span class="pop">“ It's too long ” “ I can't preview anything ” “ Gasp ! ”</span></br> Then one day, I told myself : “ Why didn't I create my own calendar ? ” </br> Then this project came thrue ! </br></br> But in fact, it's cool to have my calendar but it's better if anyone can use and enjoy it ?</h5>-->
		</div>

      <!--<div class="col s4 multiple-borders">
	    		<div class="row margin">
	    			<img class="col s6 effect" src="../<?php base_url(); ?>assets/images/dinner.jpeg">
	    			<img class="col s6 effect" src="../<?php base_url(); ?>assets/images/party.jpeg">
	    		</div>
	    		<div>
	    			<img class="col s6 effect" src="../<?php base_url(); ?>assets/images/meeting.jpeg">
	    			<img class="col s6 effect" src="../<?php base_url(); ?>assets/images/concert.jpeg">
	    		</div>
    	</div>-->

    </div>




    <div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating hover-float tooltipped red" data-position="top" data-delay="50" data-tooltip="Help us !" href="https://github.com/julienmazzia/Stuart_calendar"><i class="material-icons">free_breakfast</i></a></li>
      <li><a class="btn-floating hover-float tooltipped yellow darken-3" data-position="top" data-delay="50" data-tooltip="rate us !"><i class="material-icons">star</i></a></li>
      <li><a class="btn-floating hover-float tooltipped green" data-position="top" data-delay="50" data-tooltip="Join us !" href="../Account/createAccount"><i class="material-icons">sentiment_very_satisfied</i></a></li>
      <li><a class="btn-floating hover-float tooltipped blue" data-position="top" data-delay="50" data-tooltip="contact us !"><i class="material-icons">email</i></a></li>
    </ul>
  </div>


    <script type="text/javascript">
    	$(document).ready(function(){
	      $('.parallax').parallax();
	      $('.tooltipped').tooltip({delay: 50});
	    });
    </script>