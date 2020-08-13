#!/bin/bash
cp theme/htaccess-dist.txt ../.htaccess
npm i
cat <<END  >../index.php
<?php include_once('myserver/start.php'); ?>
END

