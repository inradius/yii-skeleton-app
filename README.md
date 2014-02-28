Yii Framework Skeleton App
======================
This is a generic Yii Framework application with MySQL integration. I built this simple app as the starting point for many projects I have worked on in the past. This application allows for user registration, user sign-in and sign-out, Facebook/Google+/Windows Live sign-in, and password reset.

This skeleton application does not include the Yii Framework itself. Download it [here](https://github.com/yiisoft/yii/).

## Install Dev Version
To install the dev version, first install [VirtualBox](http://www.virtualbox.org/) and [Vagrant](http://www.vagrantup.com/). Once both are installed on your machine, run the following commands.
```vagrant
$ git clone https://github.com/inradius/yii-skeleton-app.git
$ cd yii-skeleton-app/
$ vagrant up
```
This will begin the virtual dev server provisioning process and can take a while. Apache, MySQL and PHP along with other needed applications will be installed onto a virtual Ubuntu machine.

After that finishes, run the following commands.
```install
$ vagrant ssh
$ cd /srv
$ curl -s https://getcomposer.org/installer | php
$ php composer.phar install
```

Now the server and application should be set up and accessible from http://192.168.33.10/

Todo: Database setup/migration documentation.

## Extensions
I've included some extensions that I pretty much always use. These include:
* Twitter (Yii) Bootstrap ([Bitbucket](https://bitbucket.org/Crisu83/yii-bootstrap))
* Font Awesome ([GitHub](https://github.com/FortAwesome/Font-Awesome))
* Notify Bar ([GitHub](https://github.com/dknight/jQuery-Notify-bar))
* PHPMailer (YiiMailer) ([GitHub](https://github.com/vernes/YiiMailer))
* Facebook PHP SDK ([GitHub](https://github.com/splashlab/yii-facebook-opengraph))
* [Google PHP Client Library](https://code.google.com/p/google-api-php-client/)
* [Windows Live JS SDK](http://msdn.microsoft.com/en-us/library/live/hh243643.aspx)
* LESS CSS - PHP Compiler