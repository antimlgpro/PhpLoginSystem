 #!/bin/bash
echo $SUDO_USER
echo "To install we need php, mysql and apache2"
echo "Let me install them for you"
sudo apt-get install apache2 mysql-server mysql-client php7.0 php7.0-mysql -y --allow-unauthenticated
sudo systemctl restart apache2
cwd=`pwd`
cd ..
sudo mv -v ${cwd}/* /var/www/html/
exit
