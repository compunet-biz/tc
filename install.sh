#!/bin/bash

INSTALL_DIR=/opt/bitnami/apps/tc
LOG_FILE=/tmp/tc-install.log

echo "---------------------------------------" >> $LOG_FILE
date >> $LOG_FILE
[[ -d $INSTALL_DIR ]] || mkdir $INSTALL_DIR >> $LOG_FILE
rsync -av --delete --force --exclude="storage/*/**" --exclude="vendor/" --exclude=".git/" --exclude=".gitignore" --exclude=".env" --filter "protect .env" --filter "protect down" --filter "protect vendor/" --filter "protect storage/*/**" . /opt/bitnami/apps/tc/ >> $LOG_FILE 2>&1
(cd $INSTALL_DIR && HOME=/home/cliqruser /opt/bitnami/php/bin/composer install >> $LOG_FILE 2>&1)

