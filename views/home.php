<?php 
    use app\core\Application;  
?>
<div class="container">
    <?php if(Application::$app->session->getFlash('success')): ?>
        <div class="alert alert-success">
            <?php echo Application::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>
    <div class="card shadow-sm p-3 mb-5 bg-white">
        <div class="card-body">
            <h3 class="text-center">Welcome to Orion, <?php echo $name; ?></h3>
            <p class="text-center">Center aligned text on all viewport sizes.</p>
        </div>
    </div>
</div>