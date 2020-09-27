<?php 
$title = 'S\'inscrire'; 
//require('./controller/registration.php');
?>

<?php ob_start(); ?>

<section class="container mt-5">
    <div class="row justify-content-between">
        <div class="jumbotron blur-bg col-md-5">
            <h1 class="display-4">Rejoignez Citation</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis inventore animi distinctio et sequi, quo aut?</p>
            <hr class="my-4">
            <?php 
                if (isset($_SESSION['err'])){
                    ?>
                    <div class="mt-4 mb-4" style="height:46px;">
                        <?php echo ($_SESSION['err']) ?>
                    </div>
                    <?php
                    }
                    $_SESSION['err'] = " ";
            ?>
            <form action="./controller/registration.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Votre identifiant" required>
                </div>
                <div class="form-group mb-2">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre adress email" required>
                </div>
                <div class="form-group mt-5">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Votre mot de passe" required>
                </div>  
                <div class="form-group mb-4">
                    <input type="password" class="form-control" name="password2" id="password2" aria-describedby="passHelp" placeholder="Votre mot de passe" required>
                    <small id="emailHelp" class="form-text text-muted">Un jour une personne à dit <i>"Ne communiquez jamais votre mot de passe"</i></small>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="confidential-check" required>
                    <label class="form-check-label" for="confidential-check">J'accepte la politique de confidentialité de Citation</label>
                </div>
                <button type="submit" name="registration" class="btn btn-info mt-4">S'inscrire</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2>Lorem ipsum dolor sit.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus officiis modi ratione quis! Tempore, dolores voluptatum! Voluptatum dignissimos aliquam mollitia quos dolores quibusdam impedit placeat, maiores nemo numquam veniam assumenda quidem repellat accusamus cum ducimus quia officiis accusantium magni quaerat? Nulla, doloremque sunt! Vero nihil, possimus similique obcaecati rem, nisi voluptate deserunt dignissimos dolores temporibus magnam officia saepe cum. Vitae molestias iusto ad delectus earum quia quam dolore, saepe eos quis nostrum rerum et ipsum aperiam.</p>
        </div>
    </div>
    </section>
<?php

 $content = ob_get_clean(); ?>

<?php require('templateView.php'); ?>