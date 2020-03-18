# 2TIN Research Project
## Requirements
Install PHP >7.3
```
https://www.php.net/downloads
```
Install Composer
```
https://getcomposer.org/download/
```
Enable mysqli in the php.ini config file by adding this line:
```
extension=mysqli
```
## Testing & running the project
Install dependencies (--no-dev when in production)
```
composer install
```
Regenerate autoload classmap
```
composer dump-autoload
```

Run unit tests
```
./vendor/bin/phpunit tests
```

Place content in /var/www or whatever webserver you are using!
