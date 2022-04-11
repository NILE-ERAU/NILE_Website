cd /home/nile/NILE_Website
git pull nile_web main
sudo rm -r /var/www/nile/*
sudo cp -a /home/nile/NILE_Website/. /var/www/nile
sudo systemctl restart apache2.service
cd /var/www/nile
ls
