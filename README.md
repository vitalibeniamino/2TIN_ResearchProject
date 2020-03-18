# 2TIN Research Project
## Requirements & configuration
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
Import the employees.sql file in your mysql server. 

Open index.php and change following variables:
```
$serverName = "localhost";
$username = "mysql";
$password = "ventieldopje24";
$dbName = "employees";
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
