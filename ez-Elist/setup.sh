#!/bin/sh

listName=$1
serverDir=$2
installDir=$3

mkdir $serverDir/$listName/add/ $serverDir/$listName/del/
ln -s $instalDir/html.php $serverDir/$listName/index.php
ln -s $instalDir/db.php $serverDir/$listName/db.php
ln -s $instalDir/add.php $serverDir/$listName/add/index.php
ln -s $instalDir/del.php $serverDir/$listName/del/index.php
echo '<?php $pageId = "List";' > $serverDir/$listName/config.php

exit 0