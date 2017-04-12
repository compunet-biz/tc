#!/bin/bash

INSTALL_DIR=/opt/bitnami/apps/tc

[[ -d $INSTALL_DIR ]] || mkdir $INSTALL_DIR
cp -R * $INSTALL_DIR
(cd $INSTALL_DIR && composer install)
