# Symfony Skeleton

This is the official Drivania Symfony Skeleton, which all new PHP projects should started with. 

This project is based in Symfony 4.4.

## First steps after cloning

1. Replace `<nom del paquet>` in file `.php_cs.dist` by the name of the package you are using this skeleton on. The name will always start by `drivania-` and must match the project name.

2. Replace the `README.md` file contents by documentation that suits better your new project.

## Available tools

### PHP-CS-Fixer

Runs at every commit performed on the project, to assure the code follows the Drivania writing rules. Can also be run by using:

```shell script
composer cs
```

### PHPUnit 

```shell script
composer test
```

### Psalm

```shell script
composer psalm
```

### PHPStan

```shell script
composer stan
```