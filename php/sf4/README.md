# PHP 7.2
PHP 7.2 build for docker with xdebug,redis pdo. By default x-debug is disabled you can enabled/disable from docker-compose.yml  
```
    volumes:
        - "./manifest/config/nginx.conf:/etc/nginx/nginx.conf:ro"
        - "./manifest/config/x-debug.ini:/usr/local/etc/php/conf.d/x-debug.ini:ro"
        - "./manifest/config/supervisord.conf:/etc/supervisor/conf.d/supervisord.conf:ro"
        - "./manifest/app:/app"
```


## Getting Started

 ```
 docker-compose up -d
 ```


## Connect to Container
 ```
 ./connect
 ```

## Build Container
 ```
 ./build.sh
 ```

 
## Configure PHPSTORM 

### Configure ES6
```
Preference-> Language & Frameworks -> Javascript
     Select ECMASCRIPT 6
```    

### Configure Node
```
Preference-> Language & Frameworks -> Node.js and NPM
    Enable Node
```


### Symfony
``` 
Preference-> Language & Frameworks -> PHP -> Symfony
 	Check Enable Plugin for this Project 	
 	change Web Directory to public
 
```
### Configure X-Debug on PHPStorm
#### Preference -> PHP -> Servers
    1. + (ADD)
	   Name: Give the project Name
	   
	   Host: sf4.docker
	   

    2. Check Use path mappings
       
       Select the path of source where it mounted
       host_dir:/container_dir
       www/my_project:/app

#### Run -> Edit Configuration
    1. + (ADD) PHP Remote Debug
	    
	    Name: Give Debugger Name (Project Name Debug)
	   
	    Server: Select project which we have just created
	    
	    Idk key(session id): docker (if you change on x-debug.ini change it.
        

        
#### Useful Commands 
        php bin/console make:controller
        php bin/console debug:router        
        
#### Enable Versioning
Add config/packages/framework.yaml
```
framework:            
            assets:
                json_manifest_path: '%kernel.project_dir%/public/build/manifest.json'
```        
and modify webpack.config.js
```
.enableVersioning()
```

#### Enable Saas
```
yarn add sass-loader node-sass --dev
```
and modify webpack.config.js
```
.enableSassLoader()
```

### Enable Shared Entry
This is common modules used by all application
```
.createSharedEntry('layout', './assets/js/layout.js')
```
and after build include 
    build/manifest.js //for caching
    build/layout.js
                        

  [for more commands click here](https://symfony.com/doc/current/index.html)        
    