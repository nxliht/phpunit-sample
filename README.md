
# PHPUnit Sample

It contains a sample PHPUnit test which can be use to practice PHPUnit without add any overhead (due it's a project with minimum dependencies).

It uses composer autoload to loads the src files.

## Installation

Composer was used for dependencies, so install it with:

```
composer instal
```

## Run Tests

Run the following command:

```
./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/EmailTest
```