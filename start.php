<?php
    include_once('myserver/includes/inc.functions.php');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myserver/assets/css/style.min.css">
    <link rel="stylesheet" href="myserver/assets/css/prism.css">
    <title>RoLo Server</title>


    <?php require_once('includes/inc.favicons.php'); ?>

</head>
<body>

<?php

include_once('myserver/header.php');
include_once('myserver/content.php');
include_once('myserver/footer.php');

?>


    <script src="myserver/node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script type="module" src="myserver/assets/js/app.js"></script>

</body>
</html>
