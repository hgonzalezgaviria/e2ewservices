#!/bin/bash
# -*- ENCODING: UTF-8 -*-
# Preparar imagen ec2 para inicio 
true > /etc/environment
sudo systemctl disable glassfish.service
/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  disable emr
/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin --port 4848 --host localhost  disable EICW
stopGlassfishSever
cleanLogsAppE2ew
cleanCacheGlassfish
stopGlassfishSever
echo Imagen OK