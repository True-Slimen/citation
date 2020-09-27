
<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>

    <section class="container mt-5">
    <div class="jumbotron blur-bg">
        <h1 class="display-4">Bienvenue sur Citation !</h1>
        <p class="lead">Catalogue participatif des meilleurs citation que l'on croise sur nos routes</p>
        <hr class="my-4">
        <p>N'hésitez pas à nous rejoindre et laissez votre pierre à l'édifice.</p>
        <p class="lead">
            <a class="btn btn-outline-dark" href="index.php?action=sign-in" role="button">Inscrivez-vous !</a>
        </p>
    </div>
    </section>
    <section class="container mt-5">
        <h2>Citations publiques</h2>
        <?php 
                     $arrayPublicQuote = $_SESSION['publicQuote'];
                   

                    for($i = 0; $i < count($arrayPublicQuote); $i++){
                       
                        echo 
                       '<div class="card mt-2 mb-2 blur-bg">
                  
                        <div class="card-header ml-0 mr-0 row justify-content-between">
                            <h4 class="col-7">Citation partagé par '. $arrayPublicQuote[$i][0][2] .'</h4>
                        
                        </div>
                        <div class="card-body bg-white">
                            <blockquote class="blockquote mb-0">
                            <p>' . $arrayPublicQuote[$i][0][0] . '</p>
                            <footer class="blockquote-footer"><cite title="Source Title">' . $arrayPublicQuote[$i][0][1]  . '</cite></footer>
                            </blockquote>
                        </div>
                    </div><br>'; 
                    }
                ?>
                
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