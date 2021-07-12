#!/bin/bash

# Install Apaxy
unset input
while [ -z ${input} ]; do
    echo -n "Enter server directory. Can't be empty: "
    read input
done
sed "s/{server}/$input/g" theme/htaccess-dist.txt > ../.htaccess

# Install npm dependencies
echo "Installing npm dependencies..."
npm i

# Creating index.php
echo "Creating index..."
cat <<END  >../index.php
<?php include_once('myserver/start.php'); ?>
END