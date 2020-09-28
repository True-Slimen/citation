<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php $title ?></title>
        <?php require('view/partials/nav.php');?>

        <?php echo $content ?>

        <?php require('view/partials/footer.php');?>
    </body>
</html>