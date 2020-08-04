#!/bin/bash
npm i
cat <<END  >../index.php
<?php include_once('myserver/start.php'); ?>
END

