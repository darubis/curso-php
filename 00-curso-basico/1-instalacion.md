# Instalacion de php

agregar a los repositorios
```
sudo add-apt-repository ppa:ondrej/php
```

actualizamos los repositorios
```
sudo apt update
```

actualizamos los paquetes
```
sudo apt install php8.0 apache2
```

revisar que versiones de php tenemos intaladas
```
sudo dpkg --get-selections | grep php
```

para saber que version de php estamos ejecutando
```
php --version
```

# Configuracion y versiones de apache

abilitar php8.0

```
sudo a2enmod php8.0
```

quitar la version de php que va a utilizar apache
```
sudo a2dismod php8.0
```

agregarle otra version a apache
```
sudo a2enmod php7.3
```

reiniciar apache
```
systemctl restart apache2
```

verificar donde se estan guardando los archivos de php
```
cd /var/www/html
```

ver toda la configuracion de php
```
sudo nano /etc/php/8.0/apache2/php.ini
```

para ver los errores que se puedan generar 
cambiar la parte donde dice

display_errors = off

por

display_errors = on

instalar paquete para que apache pueda interpretar php, para versiones menores a ubuntu 18
```
sudo apt install libapache2-mod-php8.0
```

ingresar a la consola interactiva
```
php -a
```
