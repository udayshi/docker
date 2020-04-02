PhpStrom -> Preferences -> Pluggins
Search : Symfony
Install Following Pluggins:
1. Symfony Support
2. Php Toolbox
2. Php Annotation



#Install package using flex
##https://symfony.sh

composer require make --dev
composer require annotation
composer require twig
composer require monolog #Logger
composer require profiler --dev


composer require sec-checker

composer update


 bin/console security:check

bin/console make:controller DefaultController


#Set the session path and make sure its writeable
# config/packages/framework.yaml
framework:
    session:
        handler_id: session.handler.native_file
        save_path: '%kernel.project_dir%/var/sessions/%kernel.environment%'


