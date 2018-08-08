#Configure PHP Storm with Docker
1. Create Debug Server
    Name Docker:server
    php.docker:80 xdebug
    use path mapping.
    use select app:/app

2. Run => Edit Configuration
    + Create new PHP remote Debug
        Give name
        select the server which we have just created
        idekey: docker
        
----------------------------        
xdbug.ini
        
        
        
    