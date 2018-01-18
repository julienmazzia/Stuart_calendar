
<body>
<div class="slider fullscreen">
    <ul class="slides">
      <li>
        <img src="<?php base_url(); ?>assets/images/home.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Welcome to Stuart !</h3>
          <h5 class="light grey-text text-lighten-3">Your dear dedicated calendar</h5>
          <a class="waves-effect waves-light btn" href="../View/month"><i class="material-icons right">mode_edit</i>Get in !</a>
        </div>
      </li>
      <li>
        <img src="<?php base_url(); ?>assets/images/railway.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>A new way to organize your life !</h3>
          <a class="waves-effect waves-light btn" href="../View/month"><i class="material-icons right">mode_edit</i>Get in !</a>
        </div>
      </li>
      <li>
        <img src="<?php base_url(); ?>assets/images/boat.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Never waste time again</h3>
          <a class="waves-effect waves-light btn" href="../View/month"><i class="material-icons right">mode_edit</i>Get in !</a>
        </div>
      </li>
    </ul>
  </div>

  <script type="text/javascript">
  	$(document).ready(function(){
      $('.slider').slider();
    });

  </script>
  
</body>
</html>
