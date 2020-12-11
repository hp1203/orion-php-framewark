<main class="form-signin text-center">
    <div class="card shadow-sm mb-5 bg-white">
        <div class="card-body">
            <form action="" method="post">
              <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
              <h1 class="h3 mb-3 fw-normal">Register</h1>
                <div class="row mb-3">
                    <div class="col-md-6 col-sm-12">
                        <label for="inputFirstName" class="visually-hidden">First Name</label>
                        <input type="text" id="inputFirstName" class="form-control" placeholder="First Name" required="" autofocus="" name="first_name">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="inputLastName" class="visually-hidden">Last Name</label>
                        <input type="text" id="inputLastName" class="form-control" placeholder="Last Name" required="" autofocus="" name="last_name">
                    </div>
                </div>
                    
                <div class="row mb-3">
                    <div class="col-md-12 col-sm-12">
                        <label for="inputEmail" class="visually-hidden">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="email">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-12 col-sm-12">
                    <label for="inputPassword" class="visually-hidden">Password</label>
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
                    </div>
                </div>
    
                <div class="row mb-3">
                    <div class="col-md-12 col-sm-12">
                        <label for="inputConfirmPassword" class="visually-hidden">Confirm Password</label>
                        <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password" required="" name="confirm_password">
                    </div>
                </div>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
              <p class="mt-4 text-muted"><a href="/login">Already have an account? Sign In</a></p>
              <p class="mt-5 mb-3 text-muted">© <?php echo date('Y')?></p>
            </form>
        </div>
    </div>
</main>