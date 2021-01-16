<?php 
/** @var $this \himanshupurohit\orion\View */

$this->title = "Login";
?>
<main class="form-signin text-center">
    <div class="card shadow-sm mb-5 bg-white">
        <div class="card-body">
        <?php $form = \himanshupurohit\orion\form\Form::begin('','post'); ?>
              <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
              <h1 class="h3 mb-3 fw-normal">Sign in</h1>
              <div class="row mb-3">
                    <div class="col-md-12 col-sm-12">
                    <?php echo $form->inputField($model,'email', 'Email', 'Enter Your Email')->emailField(); ?>
                    </div>          
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 col-sm-12">
                    <?php echo $form->inputField($model,'password', 'Password', 'Enter Your New Password')->passwordField(); ?>
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
        <?php echo \himanshupurohit\orion\form\Form::end(); ?>
        </div>
    </div>
</main>