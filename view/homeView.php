<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>

    <section class="container mt-5">
    <div class="jumbotron blur-bg">
        <h1 class="display-4">Bienvenue sur Citation !</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis inventore animi distinctio et sequi, quo aut?</p>
        <hr class="my-4">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia.</p>
        <p class="lead">
            <a class="btn btn-outline-dark" href="index.php?action=sign-in" role="button">Inscrivez-vous !</a>
        </p>
    </div>
    </section>
    <section class="container mt-5">
        <h2>Citations publiques</h2>
        <div class="card mt-5 mb-5 blur-bg">
            <div class="card-header">
                Quote
            </div>
            <div class="card-body bg-white">
                <blockquote class="blockquote mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
        </div>
        <div class="card mt-5 mb-5 blur-bg">
            <div class="card-header">
                Quote
            </div>
            <div class="card-body bg-white">
                <blockquote class="blockquote mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
        </div>
        <div class="card mt-5 mb-5 blur-bg">
            <div class="card-header">
                Quote
            </div>
            <div class="card-body bg-white">
                <blockquote class="blockquote mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
        </div>
        <div class="card mt-5 mb-5 blur-bg">
            <div class="card-header">
                Quote
            </div>
            <div class="card-body bg-white">
                <blockquote class="blockquote mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
        <div class="col-md-4 col-sm-12">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ipsa molestiae, fuga dolore temporibus magnam. Earum cum ipsam, asperiores aspernatur officia, illum eum omnis dignissimos assumenda unde molestias tenetur sed debitis odit hic suscipit eligendi est ullam facilis totam deleniti laboriosam culpa vel aliquid! Dignissimos enim eaque minima aut suscipit velit totam obcaecati modi dolore quae? Neque possimus nostrum dolore?
        </div>
        <div class="col-md-4 col-sm-12">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ipsa molestiae, fuga dolore temporibus magnam. Earum cum ipsam, asperiores aspernatur officia, illum eum omnis dignissimos assumenda unde molestias tenetur sed debitis odit hic suscipit eligendi est ullam facilis totam deleniti laboriosam culpa vel aliquid! Dignissimos enim eaque minima aut suscipit velit totam obcaecati modi dolore quae? Neque possimus nostrum dolore?
        </div>
        <div class="col-md-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ipsa molestiae, fuga dolore temporibus magnam. Earum cum ipsam, asperiores aspernatur officia, illum eum omnis dignissimos assumenda unde molestias tenetur sed debitis odit hic suscipit eligendi est ullam facilis totam deleniti laboriosam culpa vel aliquid! Dignissimos enim eaque minima aut suscipit velit totam obcaecati modi dolore quae? Neque possimus nostrum dolore?
        </div>
        </div>
    </section>
<?php

 $content = ob_get_clean(); ?>

<?php require('templateView.php'); ?>