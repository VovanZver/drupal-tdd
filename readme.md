# Module with some basic tests

## To run tests
* create file 'core/phpunit.xml' from 'core/phpunit.xml.dist' (update credentials for db connection)
* run command (in this case run tests for all custom modules)
```
./vendor/bin/phpunit -c ./web/core ./web/modules/custom/
```
