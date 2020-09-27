<?php $title = 'Aide'; ?>

<?php ob_start(); ?>
<h1>Un coup de pouce ?</h1>

    <section class="container">
        <div class="row">
        <div class="card">
            <h5 class="card-header">Featured</h5>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
</div>
        </div>
    </section>
<?php

 $content = ob_get_clean(); ?>

<?php require('templateView.php'); ?>