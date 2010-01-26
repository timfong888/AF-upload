#!/bin/bash
# file located and run from dev.allyforce.com
# written in VI: 11-15-08

echo "this is the staging script"
echo "directory:"
path=${PWD}
echo $path

echo "deleting files in stage.allyforce.com"

rm -rf ../stage.allyforce.com/*

echo "copy all files from current dev.allyforce.com directory"

cp -rp ./* ../stage.allyforce.com/

echo "completed"
echo "change configuration.inc.php in stage.allyforce.com to stage variables"
sed -i -r '0,/prod/ s/prod/stage/' ../stage.allyforce.com/includes/configuration.inc.php
echo "../stage.allyforce.com/includes/"



echo "log the staging in the dev.allyforce.com/staging.log"
date >> staging.log

