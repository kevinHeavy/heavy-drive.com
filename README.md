# heavy-drive.com

Cahier des charges techniques 
- Symfony 2.8
- Npm
- Brunch

Installation du projet

Requis : 

- Apache
- PHP > 5.5
- MySQL > 5.7
- npm > 3.10

<h4>Installation <h4>

```html
Vérifier config apache 
sudo /etc/init.d/apache2 status
install apache
apt-get install apache2
install php
sudo apt-get install php <package>
install Mysql-server
sudo apt-get install mysql-server
install npm
sudo apt install npm
```


<h4>Mise en place du projet</h4> 


```html
Création d'un dossier "heavy" dans www
sudo mkdir heavy
Aller à la racine du dossier heavy
cd /var/www/heavy
Cloner le projet et configurer git
git clone https://github.com/HeavyDrive/heavy-drive.com.git
MAJ des dépendances et installation des vendors
sudo composer install et suivre les directions
Brunch et bower 
npm install bower
npm install brunch
brunch build ou brunch watch
Lancer le serveur
php app/console server:run ou php app/console server:run 127.0.01:80
```




