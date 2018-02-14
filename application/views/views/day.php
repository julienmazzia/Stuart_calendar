<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Add a task</h4>
      <div class="row">
      	<div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Name</label>
        </div>

        <div class="input-field col s6">
	        <select>
		      <option value="" disabled selected>Choose a category</option>
		      <option value="1">Sport</option>
		      <option value="2">Market</option>
		      <option value="3">Event</option>
		    </select>
		    <label>Materialize Select</label>
		</div>
      </div>

      <div class="row">
      	<div class="col s3">
      		<p>
		      <input type="checkbox" class="filled-in" id="filled-in-box"/>
		      <label for="filled-in-box">Important</label>
		    </p>
      	</div>
      </div>

      <div class="row">
	      <div class="input-field col s12">
	        <textarea id="textarea1" class="materialize-textarea"></textarea>
	        <label for="textarea1">Description</label>
	      </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:#4CAF50;">add</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:#F44336;">cancel</a>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Add a task</h4>
      <div class="row">
      	<div class="input-field col s6">
          <input id="title" type="text" class="validate">
          <label for="last_name">Name</label>
        </div>

        <div class="input-field col s6">
	        <select>
		      <option value="" disabled selected>Choose a category</option>
		      <option value="1">Sport</option>
		      <option value="2">Market</option>
		      <option value="3">Event</option>
		    </select>
		    <label>Materialize Select</label>
		</div>
      </div>

      <div class="row">
      	<div class="col s3">
      		<p>
		      <input type="checkbox" class="filled-in" id="filled-in-box2"/>
		      <label for="filled-in-box">Important</label>
		    </p>
      	</div>
      </div>

      <div class="row">
	      <div class="input-field col s12">
	        <textarea id="textarea2" class="materialize-textarea"></textarea>
	        <label for="textarea2">Description</label>
	      </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:#4CAF50;">add</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:#F44336;">cancel</a>
    </div>
  </div>

<div class="contain">
	<div><a href="../View/month" class="back"><i class="medium material-icons">arrow_back</i></a></div>
<h2 style="margin-bottom: -9vh;" class="title1"><?php echo $_GET["day"] ?></h2>

<div id="preview_background">
	
</div>

<div id="preview_task">
	<div id="task_title" class="center-align">
		<div class="row">
			<h3 style="color: white;" class="col s5 offset-s3">To Do List</h3>
			<div class="col s2  offset-s2" style="margin-top: 2vh;">
				<a class="btn-floating btn-large waves-effect waves-light modal-trigger" style="background-color: #F7CA18;" href="#modal1"><i class="material-icons hover-button">add</i></a>
			</div>
		</div>

		<ul class="collapsible" data-collapsible="accordion">
		  <li>
		    <div class="collapsible-header">
		      <i class="material-icons">rowing</i>
		      <div id="coll2">Do sport</div>
		      <span style="background-color: #ef5350" class="new badge" data-badge-caption="important"></span></div>
		    <div class="collapsible-body coll-body">
		    	<p class="desc_coll">Some description here, hello, hello, hello, hello, hello, hello, hello, hello, hello, hello</p>
		    	<div style="margin-bottom: 2vh;" class="separator2"></div>
		    	<div class="row menu_coll">
		    		<div class="col s2">
			    		<a class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons hover-button">edit</i></a>
			    	</div>
			    	<div class="col s2">
			    		<a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons hover-button">delete</i></a>
			    	</div>
			    	<div class="col s1 offset-s6">
			    		<a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons hover-button">done</i></a>
			    	</div>
		    	</div>
		    </div>
		  </li>
		  <li>
		    <div class="collapsible-header">
		      <i class="material-icons">event</i>
		      Drink tea
		      <span class="new badge" data-badge-caption="to do"></span></div>
		    <div class="collapsible-body coll-body">
		    <p class="desc_coll" id="desc2">Some other there</p>
		    <div style="margin-bottom: 2vh;" class="separator2"></div>
		    	<div class="row menu_coll">
		    		<div class="col s2">
			    		<a class="btn-floating btn-large waves-effect waves-light blue modal-trigger" href="#modal2"><i class="material-icons hover-button">edit</i></a>
			    	</div>
			    	<div class="col s2">
			    		<a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons hover-button">delete</i></a>
			    	</div>
			    	<div class="col s1 offset-s6">
			    		<a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons hover-button">done</i></a>
			    	</div>
		    	</div>
		    </div>

		  </li>
		</ul>
	</div>
</div>
</div>

<script type="text/javascript" src="<?php base_url(); ?>/assets/js/show_day.js"></script>
<script type="text/javascript" src="<?php base_url(); ?>/assets/js/fillModal.js"></script>