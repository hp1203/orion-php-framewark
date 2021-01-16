<?php 
/** @var $this \himanshupurohit\orion\View */
/** @var $model \app\models\ContactForm */
use himanshupurohit\orion\Application;
$this->title = "Contact Us";
?>
<div class="container">
<h1>Contact Us</h1>
<?php if(Application::$app->session->getFlash('success')): ?>
        <div class="alert alert-success">
            <?php echo Application::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>
<?php $form = \himanshupurohit\orion\form\Form::begin('','post'); ?>
  <fieldset >
    <div class="mb-3">
      <label class="form-label">Email</label>
      <?php echo $form->inputField($model, 'email', 'Email', 'Enter Your Email')->emailField(); ?>
    </div>
    <div class="mb-3">
      <label class="form-label">Subject</label>
      <?php echo $form->inputField($model, 'subject', 'Subject', 'Enter Subject'); ?>
    </div>
    <div class="mb-3">
      <label class="form-label">Message</label>
      <?php echo $form->textareaField($model, 'body', 'Message', 'Enter Message'); ?>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
<?php echo \himanshupurohit\orion\form\Form::end(); ?>


</div>