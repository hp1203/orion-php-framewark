<main class="form-signin text-center">
    <div class="card shadow-sm mb-5 bg-white">
        <div class="card-body">
            <form>
              <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
              <h1 class="h3 mb-3 fw-normal">Sign in</h1>
              <div class="row mb-3">
                    <div class="col-md-12 col-sm-12">
                        <label for="inputEmail" class="visually-hidden">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                    </div>          
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 col-sm-12">

                        <label for="inputPassword" class="visually-hidden">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                    </div>          
                </div>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
              <p class="mt-4 text-muted"><a href="/register">New Here? Register</a></p>
              <p class="mt-4 mb-3 text-muted">© <?php echo date('Y')?></p>
            </form>
        </div>
    </div>
</main>