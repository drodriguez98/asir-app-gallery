<div class="container">

  <div class="row">

    <div class="col-lg-3"></div>

    <div class="col-lg-6 form_login">
      
        <form class="form-signin" method="post" action="actions/login-action.php">

            <h4 class="form-signin-heading">Please identify yourself:</h4>

            <label for="email" class="sr-only">Email</label>
            <input type="email" id="email" name="email" class="form-control frm_login_email" placeholder="Email" required autofocus>

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="login_password" name="login_password" class="form-control frm_login_pass" placeholder="Contraseña" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            
            <a class="btn btn-lg btn-warning btn-block" href="auth.php?page=new">New author</a>

        </form>

    </div>

    <div class="col-lg-3"></div>

  </div>

</div>