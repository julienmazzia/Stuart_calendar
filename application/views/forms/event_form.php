<form class="container" id="container_event">
	<h3>Complete the form to add a new event !</h1>
	<div class="row">
		<div class="input-field col s3">
	          <input id="name" type="text" class="validate" required>
	          <label for="name">Event name</label>
	    </div>

	    <div class="input-field col s3">
	          <input id="place" type="text" class="validate">
	          <label for="place">Place</label>
	    </div>
	</div>

	<div class="row">
	    <div class="input-field col s2">
	          <input id="date" type="text" class="datepicker" required>
	          <label for="date">Date</label>
	    </div>
    </div>
    <div class="row">
        <div class="input-field col s2">
        	<p>Begin time : </p>
            <input id="timepicker_ampm_dark_1" class="timepicker" type="time" required>
        </div>

        <div class="input-field col s2">
        	<p>Ending time : </p>
            <input id="timepicker_ampm_dark_2" class="timepicker" type="time" required>
            <p id="hour_error">Wrong ending hour</p>
        </div>
    </div>

    <div class="row">
    	<div class="input-field col s8">
            <textarea id="textarea2" class="materialize-textarea" data-length="300"></textarea>
            <label for="textarea2">Description</label>
        </div>
    </div>

    <div class="row">
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
	    <i class="material-icons right">send</i>
	  </button>
    </div>

</form>

<script type="text/javascript" src="<?php base_url(); ?>/assets/js/initializer.js"></script>

<script type="text/javascript" src="<?php base_url(); ?>/assets/js/controllerForm_event.js"></script>