#!/bin/sh

listName=$1
serverDir=$2
installDir=$3
usage() {
printf 'Usage: %s ListName /Server/Dir /Install/Dir
    ListName:  Name of your list
    ServerDir: Web server directory to install the list files
    InstalDir: Directory in which base installation files will reside\n' \
    "$(basename "$0")" >&2;
}

if [ $# -lt 3 ]; then
    usage; exit 64;
#elif [  ]; then
fi

mkdir $serverDir/$listName $serverDir/$listName/add/ $serverDir/$listName/del/
ln -s $instalDir/html.php $serverDir/$listName/index.php
ln -s $instalDir/style.php $serverDir/$listName/style.php
ln -s $instalDir/db.php $serverDir/$listName/db.php
ln -s $instalDir/add.php $serverDir/$listName/add/index.php
ln -s $instalDir/del.php $serverDir/$listName/del/index.php
echo '<?php $pageId = "List";' > $serverDir/$listName/config.php

exit 0
