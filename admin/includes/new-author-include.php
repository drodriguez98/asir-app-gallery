<div class="container">

  <div class="row">

    <div class="col-lg-12 text-lett"> <h2 class="mt-5">New author</h2> </div>

  </div>

  <div class="row form_new">

    <div class="col-lg-12 text-lett">

      <div class="col-lg-2 text-left"></div>

      <div class="col-lg-10 text-left"> 

        <form role="form" action="actions/new-author-action.php" method="post">

          <div class="form-group row">

            <label for="name" class="col-lg-2 col-form-label">Name</label>
             
              <div class="col-lg-4 text-lett"> <input type="text" class="form-control" id="name" name="name" placeholder=""> </div>
           
          </div>

          <div class="form-group row">

            <label for="email" class="col-lg-2 col-form-label">Email</label>
             
              <div class="col-lg-6 text-lett"> <input type="text" class="form-control" id="email" name="email" placeholder=""> </div>
             
          </div>

          <div class="form-group row">

            <label for="password" class="col-lg-2 col-form-label">Password</label>
             
              <div class="col-lg-4 text-lett"> <input type="password" class="form-control" id="password" name="password" placeholder=""> </div>
           
          </div>

          <div class="form-group row">

            <label for="enabled" class="col-lg-2 col-form-label">Enabled</label>
             
              <div class="col-lg-3 text-lett"> <input type="checkbox"  id="enabled" name="enabled"> </div>
            
          </div>

          <button type="submit" class="btn btn-primary">Add</button>

        </form>

      </div>
      
      <div class="col-lg-2 text-left"></div>

    </div>

  </div>

</div>