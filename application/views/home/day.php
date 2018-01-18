<h2 style="margin-bottom: -9vh;" class="title1"><?php echo $_GET["day"] ?></h2>

<div id="preview_background">
	
</div>

<div id="preview_task">
	<div id="task_title" class="center-align">
		<h1>To Do List</h1>
		<ul class="collapsible" data-collapsible="accordion">
		  <li>
		    <div class="collapsible-header">
		      <i class="material-icons">rowing</i>
		      Do sport
		      <span class="new badge" data-badge-caption="important"></span></div>
		    <div class="collapsible-body coll-body"><p>Some description here</p></div>
		  </li>
		  <li>
		    <div class="collapsible-header">
		      <i class="material-icons">event</i>
		      Drink tea
		      <span class="new badge" data-badge-caption="to do"></span></div>
		    <div class="collapsible-body coll-body"><p>Some ohter there</p></div>
		  </li>
		</ul>
	</div>
</div>

<script type="text/javascript" src="<?php base_url(); ?>/assets/js/show_day.js"></script>