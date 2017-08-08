#!/bin/sh

listName=$1
serverDir=$2
installDir=$3

if [ $# -lt 3 ]; then
    printf 'Usage: %s ListName ServerDir InstallDir ...\n' "$(basename "$0")" >&2
    exit 64
fi

mkdir $serverDir/$listName/add/ $serverDir/$listName/del/
ln -s $instalDir/html.php $serverDir/$listName/index.php
ln -s $instalDir/db.php $serverDir/$listName/db.php
ln -s $instalDir/add.php $serverDir/$listName/add/index.php
ln -s $instalDir/del.php $serverDir/$listName/del/index.php
echo '<?php $pageId = "List";' > $serverDir/$listName/config.php

exit 0
