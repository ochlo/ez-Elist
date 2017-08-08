#!/bin/sh

listName=$1
serverDir=$2
installDir=$3
if [ $serverDir = . ]; then serverDir=$PWD; fi

usage() {
printf 'Usage: %s ListName /Server/Dir /Install/Dir
    ListName:  Name of your list
    ServerDir: Web server directory to install the list files
    installDir: Directory in which base installation files will reside\n' \
    "$(basename "$0")" >&2;
}

#tests
if [ $# -lt 3 ]; then
    usage; exit 64;
fi

if [ $installDir = . ]; then
    installDir=$PWD;
else
    mkdir $installDir; cp -a * $installDir;
fi

mkdir $serverDir/$listName $serverDir/$listName/add/ $serverDir/$listName/del/
ln -s $installDir/html.php $serverDir/$listName/index.php
ln -s $installDir/style.css $serverDir/$listName/style.css
ln -s $installDir/db.php $serverDir/$listName/db.php
ln -s $installDir/add.php $serverDir/$listName/add/index.php
ln -s $installDir/del.php $serverDir/$listName/del/index.php
echo '<?php $pageId = "List";' > $serverDir/$listName/config.php

exit 0
