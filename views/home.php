<?php 
use himanshupurohit\orion\Application;  
/** @var $this \himanshupurohit\orion\View */
$this->title = "Orion - Simple Php MVC Framework";
?>
<div class="container mx-auto">
    <?php if(Application::$app->session->getFlash('success')): ?>
        <div class="alert alert-success">
            <?php echo Application::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>
    <div class="card shadow-sm p-12 mb-5 bg-white">
        <h2 class="text-4xl text-blue-500">Welcome to Orion</h2>
        <p class="my-2 text-lg font-thin text-gray-400">A Simple Php MVC Framework</p>
    </div>
</div>