<?php $title = 'Accueil';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    header("Location: ./index.php?action=sign-in");
            exit;
}?>

<?php ob_start(); ?>

<div class="container-fluid">

<div class="jumbotron blur-bg ml-auto mr-auto row col-12 ">
    <div class="col-3 col-sm-2 border pl-0 pr-0 user-menu">
        
        <div class="user-nav-sticky">
            <button type="button" class="btn btn-info col-12 first-user-btn">Button</button>
            <hr class="ml-auto mr-auto mt-0 mb-0">
            <button type="button" class="btn btn-info col-12 second-user-btn">Button</button>
            <hr class="ml-auto mr-auto mt-0 mb-0">
            <button type="button" class="btn btn-info col-12 third-user-btn">Button</button>
        </div>
    </div>
    <div class="col-9 col-md-10">
        <h1 class="display-4">Bienvenue sur votre pannel
            <?php 
                if (isset($_SESSION['username']) AND isset($_SESSION['userId'])){
                    $redactorName = $_SESSION['username'];
                         echo '<strong>';
                         echo $redactorName . ', votre id est : ' . $_SESSION['userId'];
                         echo '</strong>';
                    
                    }?>
                </h1>
        <p class="lead">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis inventore animi distinctio et sequi, quo aut?
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium totam ea, beatae ducimus maxime exercitationem fugiat et, placeat molestiae suscipit eius. Architecto, provident repellat nam, accusamus asperiores iste eos expedita exercitationem laborum, deserunt aut hic et eius facere rerum aliquam.
        </p>
       <hr class="my-4">
        <div class="row">
            <div class="col-12 col-md-6 border-right">
                <h3>Nouvelle citation</h3>
                <form action="./controller/newQuote.php" method="post">
                    <div class="form-group">
                        <textarea  rows="4" class="form-control" name="content" id="content" required>Votre citation</textarea> 
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" class="form-control" name="author" id="author" placeholder="L'auteur de la citation">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="public-check" class="form-check-input" id="public-check">
                        <label class="form-check-label" for="public-check">Ajouter aux citations publiques</label>
                    </div>
                    <button type="submit" name="newQuote" class="btn btn-info mt-4">Ajouter</button>
                    <div class="mt-4 mb-4" style="height:46px;">
            <?php 
                if (isset($_SESSION['success'])){
                    ?>
                    
                        <?php echo $_SESSION['success'] ?>
                    
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
                </form>
            </div>
            <div class="col-12 col-md-6">
                <h3>Vos citations</h3>
                <div class="personnal-quote-frame jumbotron">
                <?php 
                     $arrayPersonnalQuote = $_SESSION['personnalQuote'];
    
                    for($i = 0; $i < count($arrayPersonnalQuote); $i++){
                       
                        echo 
                       '<div class="card mt-2 mb-2 blur-bg">
                  
                        <div class="card-header ml-0 mr-0 row justify-content-between">
                            <h4 class="col-7">Citation</h4>
                            <form action="./controller/manageQuote.php" class="col-4 pr-0 row justify-content-between" method="post">'. $arrayPersonnalQuote[$i][2] .'
                            <button type="submit" value="'.$arrayPersonnalQuote[$i][0] .'"  name="removeQuote" class="btn btn-outline-danger">X</button>
                            </form>
                        </div>
                        <div class="card-body bg-white">
                            <blockquote class="blockquote mb-0">
                            <p>' . $arrayPersonnalQuote[$i][3] . '</p>
                            <footer class="blockquote-footer"><cite title="Source Title">' . $arrayPersonnalQuote[$i][4] . '</cite></footer>' . $arrayPersonnalQuote[$i][5] . '
                            </blockquote>
                        </div>
                    </div><br>'; 
                    }
                ?>
                
                </div>
                
            </div>
        </div>
            <a class="btn btn-outline-dark" href="index.php?action=sign-out" role="button">Se déconnecter</a>
        </p>
        </div>
    </div>
    </div>
<?php

 $content = ob_get_clean(); ?>

<?php require('view/templateView.php'); ?>
