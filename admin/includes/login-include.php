<div class="container">

	<div class="row"> <div class="col-lg-12 text-lett"> <h2 class="mt-5">Login</h2> </div> </div>

	<div class="col-lg-6">
	  
		<form role="form" action="actions/login-action.php" method="post">

			<label for="email" class="sr-only">Email</label>
			<input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>

			<label for="password" class="sr-only">Password</label>
			<input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>

			<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
			
			<a class="btn btn-lg btn-warning btn-block" href="auth.php?page=new">New author</a>

		</form>

	</div>

	<div class="col-lg-3"></div>

</div>