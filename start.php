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


</head>
<body>


    <div class="my-5">
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
