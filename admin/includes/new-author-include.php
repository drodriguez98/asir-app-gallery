<div class="container">

  <div class="row">

    <div class="col-lg-12 text-lett"> <h2 class="mt-5">New author</h2> </div>

  </div>

  <div class="col-lg-6">

	<form role="form" action="actions/new-author-action.php" method="post">
	
		<label for="name" class="sr-only"></label>
		<input type="text" id="name" name="name" class="form-control" placeholder="Name" required autofocus>

		<label for="email" class="sr-only"></label>
		<input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>

		<label for="password" class="sr-only"></label>
		<input type="password" id="password" name="password" class="form-control" placeholder="Password" required autofocus>

		<label for="enabled">Enabled</label>
		<input type="checkbox"  id="enabled" name="enabled">

	  <button class="btn btn-lg btn-primary btn-block" type="submit">Add</button>

	</form>
     
  </div>

</div>