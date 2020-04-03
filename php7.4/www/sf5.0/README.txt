composer create-project symfony/skeleton sfproject

PhpStrom -> Preferences -> Pluggins
Search : Symfony
Install Following Pluggins:
1. Symfony Support
2. Php Toolbox
2. Php Annotation



#Install package using flex
##https://symfony.sh


composer require annotation
composer require twig
composer require monolog  #Logger
composer require debug --dev
composer require profiler --dev
composer require maker --dev
composer require phpunit --dev

composer require sec-checker



composer update



 bin/console security:check

bin/console make:controller DefaultController


#Setting PHPunit
composer require phpunit --dev
bin/phpunit

cd /usr/local/bin && ln -sf /app/bin/phpunit phpunit

#Set the session path and make sure its writeable
# config/packages/framework.yaml
framework:
    session:
        handler_id: session.handler.native_file
        save_path: '%kernel.project_dir%/var/sessions/%kernel.environment%'



#Unpack Pack
composer unpack debug



#Install encore (Install node and yarn)
composer require symfony/webpack-encore-pack
yarn install
#yarn add @symfony/webpack-encore --dev

 yarn add bootstrap@4.*
 yarn add holderjs
 yarn add popper.js@1.12.9
 yarn add jquery@4.*
 yarn add webpack-notifier@^1.6.0 --dev
##############################
 #Package.json
   "scripts": {

     "start": "encore dev --watch",
     "build": "encore prod"
   }


  npm start
  npm run build

##############################