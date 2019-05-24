#!/bin/bash
# -*- ENCODING: UTF-8 -*-
# Preparar imagen ec2 para inicio 
sudo systemctl disable glassfish.service
source /etc/environment
/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  disable emr
/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  disable EICW
/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  delete-jvm-options -De2ewsecurity.db.useremr=$E2EWSECURITY_DB_USEREMR
/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  delete-jvm-options -De2ewsecurity.db.userspi=$E2EWSECURITY_DB_USERSPI
/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  delete-jvm-options -De2ewsecurity.db.usereic=$E2EWSECURITY_DB_USEREIC
/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  delete-jvm-options -De2ewsecurity.db.url=$E2EWSECURITY_DB_URL
/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  delete-password-alias dbpass
true > /etc/environment
stopGlassfishSever
cleanLogsAppE2ew
cleanCacheGlassfish
stopGlassfishSever
echo Imagen OK