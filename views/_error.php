<?php 

/** @var $exception \Exception */

?>
<style>
.error-template {padding: 40px 15px;text-align: center;}
.error-actions {margin-top:15px;margin-bottom:15px;}
.error-actions .btn { margin-right:10px; }
</style>
<div class="container">
<div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1 style="font-size:90px">Orion</h1>
                <h2>
                <?php echo $exception->getCode(); ?></h2>
                <div class="error-details">
                    <?php echo $exception->getMessage(); ?>
                </div>
                <div class="error-actions">
                    <a href="/" class="btn btn-primary btn-lg">
                        Take Me Home 
                    </a>
                    <a href="http://www.google.com" class="btn btn-default btn-lg">
                        Contact Support 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>