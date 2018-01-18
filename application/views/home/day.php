<h2 style="margin-bottom: -9vh;" class="title1"><?php echo $_GET["day"] ?></h2>

<div id="preview_background">
	
</div>

<div id="preview_task">
	<div id="task_title" class="center-align">
		<h1 style="color: white;">To Do List</h1>
		<ul class="collapsible" data-collapsible="accordion">
		  <li>
		    <div class="collapsible-header">
		      <i class="material-icons">rowing</i>
		      Do sport
		      <span style="background-color: #ef5350" class="new badge" data-badge-caption="important"></span></div>
		    <div class="collapsible-body coll-body">
		    	<p>Some description here, hello, hello, hello, hello, hello, hello, hello, hello, hello, hello</p>
		    	<div style="margin-bottom: 2vh;" class="separator2"></div>
		    	<div class="row">
		    		<div class="col s2">
			    		<a class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></a>
			    	</div>
			    	<div class="col s2">
			    		<a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
			    	</div>
			    	<div class="col s1 offset-s6">
			    		<a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">done</i></a>
			    	</div>
		    	</div>
		    </div>
		  </li>
		  <li>
		    <div class="collapsible-header">
		      <i class="material-icons">event</i>
		      Drink tea
		      <span class="new badge" data-badge-caption="to do"></span></div>
		    <div class="collapsible-body coll-body"><p>Some other there</p>
		    <div style="margin-bottom: 2vh;" class="separator2"></div>
		    	<div class="row">
		    		<div class="col s2">
			    		<a class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></a>
			    	</div>
			    	<div class="col s2">
			    		<a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
			    	</div>
			    	<div class="col s1 offset-s6">
			    		<a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">done</i></a>
			    	</div>
		    	</div>
		    </div>

		  </li>
		</ul>
	</div>
</div>

<script type="text/javascript" src="<?php base_url(); ?>/assets/js/show_day.js"></script>