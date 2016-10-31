#!/bin/bash

echo "To install we need php, mysql and apache2"

dpkg-query -W -f='${Status} ${Version}\n' apache2
if [ $? -eq 0 ]; then
dpkg-query -W -f='${Status} ${Version}\n' php
else apache2="false"
if [ $? -eq 0 ]; then
dpkg-query -W -f='${Status} ${Version}\n' mysql-server
else php="false"
if [ $? -eq 0 ]; then
echo "everything is installed"
cd ..
sudo mv /PhpLoginSystem/ /var/www/html/
else mysql="false"
if [$apache2=false]; then
if [$php=false]; then
if [$mysql=false]; then
echo "You dont have apache2, php or mysql let me install them for you"
apt-get install -y apache2 mysql-server mysql-client php7.0 php7.0-mysql
sudo systemctl restart apache2
cd ..
sudo mv /PhpLoginSystem/ /var/www/html/
