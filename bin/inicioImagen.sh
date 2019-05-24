#!/bin/bash
# -*- ENCODING: UTF-8 -*-
# Inicio de Imagen ec2
sudo yum update -y
echo "export E2EWSECURITY_DB_URL=\"jdbc:oracle:thin:@oracle.inttegrio-aws.com:1521:smart\"" >> /etc/environment
echo "export E2EWSECURITY_DB_USEREIC=\"EICDATOS\"" >> /etc/environment
echo "export E2EWSECURITY_DB_USEREMR=\"EMR\"" >> /etc/environment
echo "export E2EWSECURITY_DB_USERSPI=\"SPIDER\"" >> /etc/environment
sudo su - hbuser
startGlassfishSever