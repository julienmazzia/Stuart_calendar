<a href="../View/month" class="back" style="margin-top: 5vh;"><i class="medium material-icons">arrow_back</i></a>

<div class="row" style="margin-bottom: 0px;">
  <form class="col s10 m8 l8 offset-s1 offset-m2 offset-l2" id="container_event">

  	<h4>Complete the form to add a new event !</h4>

  	<div style="margin-bottom: 10vh;" class="separator2 container_separator"></div>

  	<div class="row">
  		<div class="input-field col s10 m3 l3">
  	          <input id="name" type="text" class="validate" required>
  	          <label for="name">Event name</label>
  	    </div>

  	    <div class="input-field col s10 m3 l3">
  	          <input id="place" type="text" class="validate">
  	          <label for="place">Place</label>
  	    </div>
          <div class="input-field col s5 m3 l3">
              <select>
                <option value="0" disabled selected>Category</option>
                <option value="1">Sport</option>
                <option value="2">Dentist</option>
                <option value="3">meeting</option>
              </select>
            </div>
  	</div>

  	<div class="row">
  	    <div class="input-field col s5 m4 l2">
  	          <input id="date1" type="text" class="datepicker" required>
  	          <label for="date">Begining date</label>
  	    </div>
          <div class="input-field col s5 m4 l2">
                <input id="date2" type="text" class="datepicker">
                <label for="date">Ending date</label>
          </div>
      </div>
      
      <div class="row">
          <div class="input-field col s5 m4 l2">
              <input id="timepicker_ampm_dark_1" class="timepicker" type="time" required>
              <label for="date" class="active">Begin time :</label>
          </div>

          <div class="input-field col s5 m4 l2">
              <input id="timepicker_ampm_dark_2" class="timepicker" type="time">
              <label for="date" class="active">Ending time :</label>
              <p id="hour_error">Wrong ending hour</p>
          </div>
      </div>

      <div class="row">
      	<div class="input-field col s10 m8 l8">
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
</div>

<script type="text/javascript" src="<?php base_url(); ?>/assets/js/initializer.js"></script>

<script type="text/javascript" src="<?php base_url(); ?>/assets/js/controllerForm_event.js"></script>