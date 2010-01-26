#!/bin/bash
#copies staging database into the dev database

echo "executing mysql dump of database allyfor_allyfor_stage to allyfor_stage_to_dev.sql"
mysqldump -u allyfor_web --password=enzo77 --add-drop-database --add-locks --create-options --disable-key --extended-insert -h mysql.imountain.com --result-file-allyfor_stage_to_dev.sql  allyfor_allyfor_stage

echo "loading file allyfor_stage_to_dev.sql into development db: allyfor_allyforce"
mysql --user=allyfor_dba --password=1col312 -h mysql.imountain.com allyfor_allyforce < allyfor_stage_to_dev.sql


echo "logging date"
date >> db2dev.log

