<?php
    include_once('myserver/includes/inc.functions.php');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myserver/assets/css/style.css<?php echo '?date=' . time(); ?>">
    <link rel="stylesheet" href="myserver/assets/css/prism.min.css">
    <title>RoLo Server</title>


    <?php require_once('includes/inc.favicons.php'); ?>


    <?php
    
        $imagesDir = 'myserver/assets/img/backgrounds/';
        $images = glob($imagesDir . '*.{jpg}', GLOB_BRACE);
        $randomImage = $images[array_rand($images)]; // See comments
    
    ?>

</head>
<body style="background-image: url( <?php echo $randomImage; ?> );">


    <div class="filter">
    
        <?php

        include_once('myserver/header.php');
        include_once('myserver/content.php');
        include_once('myserver/footer.php');

        ?>
    
    </div>


    <script type="module" src="myserver/assets/js/jquery.min.js"></script>
    <script type="module" src="myserver/assets/js/prism.min.js"></script>
    <script type="module" src="myserver/assets/js/fawesome-all.min.js"></script>
    <script type="module" src="myserver/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>
