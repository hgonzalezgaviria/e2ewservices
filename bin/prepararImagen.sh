#!/bin/bash
# -*- ENCODING: UTF-8 -*-
# Preparar imagen ec2 para inicio
pathPass="/u01/app/hbuser/product/glassfish4/glassfish/config/inittask.txt"
pathGlassfish="/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin"
pathGlassfishdomain="/u01/app/hbuser/product/glassfish4/glassfish/domains/domain1/config/domain.xml"
sudo systemctl disable glassfish.service
sudo chkconfig activemq off
source /etc/environment
#/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  --user=admin --interactive=false  --passwordfile $pathPass disable emr
#/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  --user=admin --interactive=false  --passwordfile $pathPass disable EICW
#/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  delete-jvm-options -De2ewsecurity.db.useremr=$E2EWSECURITY_DB_USEREMR
#/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  delete-jvm-options -De2ewsecurity.db.userspi=$E2EWSECURITY_DB_USERSPI
#/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  delete-jvm-options -De2ewsecurity.db.usereic=$E2EWSECURITY_DB_USEREIC
#/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  delete-jvm-options -De2ewsecurity.db.url=$E2EWSECURITY_DB_URL
/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  --user=admin --interactive=false  --passwordfile $pathPass  delete-password-alias dbpass
stopGlassfishSever
cleanLogsAppE2ew
cleanCacheGlassfish
stopGlassfishSever
sudo service activemq stop
sed -i 's/virtual-servers="server"/virtual-servers="server" enabled="false"/g' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.url/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.userbmi/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.usere2f/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.useremr/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.userspi/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.usereic/d' $pathGlassfishdomain
true > /etc/environment
echo Imagen OK
