# calculator
Create a calculator in Symfony framework

Clone it to your root htdocs folder.
Start the PHP server using the following command:
```shell
php bin/console server:run 0.0.0.0
```
Open your browser and enter in URL http://localhost:8888/calculator/public/calculator. 

You can add virtual host to eliminate the long URL - http://localhost:8888/calculator/public/

Now you will see a form to enter 2 values with a operation type and Submit button. 

Result will be displayed on click of Submit.


# Unit Tests
It includes some unit tests. To execute them please run:
```shell
php vendor/phpunit/phpunit/phpunit
```
