<?php
    include_once('myserver/includes/inc.functions.php');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myserver/assets/css/style.min.css<?php echo '?date=' . time(); ?>">
    <link rel="stylesheet" href="myserver/assets/css/prism.min.css">
    <title>RoLo Server</title>


    <?php require_once('includes/inc.favicons.php'); ?>

</head>
<body>

<?php

include_once('myserver/header.php');
include_once('myserver/content.php');
include_once('myserver/footer.php');

?>


    <script type="module" src="myserver/assets/js/main.js"></script>

</body>
</html>
