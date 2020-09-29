<?php $title = 'Aide'; ?>

<?php ob_start(); ?>


<section class="container">
        <div class="mt-4 mb-4" style="height:46px;">
            <?php 
                if (isset($_SESSION['success'])){
                    ?>
                    
                        <?php echo ($_SESSION['success']) ?>
                    
                    <?php
                }if (isset($_SESSION['err'])){
                    ?>
                    
                        <?php echo ($_SESSION['err']) ?>
                    
                    <?php
                }
                $_SESSION['success'] = " ";
                $_SESSION['err'] = " ";
            ?>
        </div>
        <div class="jumbotron blur-bg row justify-content-between">
            <div class="col-md-5 col-sm-12">
                <h1 class="display-4">Un coup de pouce ?</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis inventore animi distinctio et sequi, quo aut?</p>
                <hr class="my-4">
        </div>
        <div class="col-md-6">
            <h2>Lorem ipsum dolor sit.</h2>
            <p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus officiis modi ratione quis! Tempore, dolores voluptatum! Voluptatum dignissimos aliquam mollitia quos dolores quibusdam impedit placeat, maiores nemo numquam veniam assumenda.</p>
            <p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus officiis modi ratione quis! Tempore, dolores voluptatum! Voluptatum dignissimos aliquam mollitia quos dolores quibusdam impedit placeat, maiores nemo numquam veniam assumenda.</p>
        </div>
    </section>
<?php

 $content = ob_get_clean(); ?>

<?php require('templateView.php'); ?>