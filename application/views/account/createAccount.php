<body>
	<form action="../View/month" method="POST">
		<div id="form_container" class="login_padding">
			<h3 class="center-align">Create your account !</h3>
			<div class="row" style="margin-top: 5vh;">
				<div class="input-field col s6 offset-s2">
		          <input placeholder="Placeholder" id="Username" type="text" class="validate" required="true">
		          <label for="Username">Username</label>
		        </div>
			</div>

			<div class="row">
				<div class="input-field col s6 offset-s2">
		          <input placeholder="Placeholder" id="mail" type="email" class="validate" required="true">
		          <label for="mail">mail</label>
		        </div>
			</div>

			<div class="row">
				<div class="input-field col s6 offset-s2">
		          <input placeholder="Placeholder" id="password" type="password" class="validate" required="true">
		          <label for="password">password</label>
		        </div>
			</div>

			<div class="row">
				<div class="input-field col s6 offset-s2">
		          <button class="btn waves-effect waves-light" type="submit" name="action">Ready !
				    <i class="material-icons right">send</i>
				  </button>
		        </div>
			</div>


		</div>
	</form>
</body>