# Symfony Skeleton

This is the official Drivania Symfony Skeleton, which all new PHP projects should started with. 

This project is based in Symfony 4.4.

## First steps after cloning

1. Replace `<nom del paquet>` in file `.php_cs.dist` by the name of the package you are using this skeleton on. The name will always start by `drivania-` and must match the project name.

2. Replace the `README.md` file contents by documentation that suits better your new project.

3. Replace the value of the parameter `host_project_name` in `config/services.yaml` by the first part of the name of the public domain of this service. For example, if it's going to be published under `booking.drivania.com`, this value must be set to `booking`.

4. Define an ENV var called `ELASTIC_IP` in `.env` with the IP of the Elastic Log server. 

## Templating dependencies

Install all of the following dependencies, optionally skipping any if you do not want to install it:

```
# Twig (templates)
composer require twig

# Webpack Encore (asset management) 
composer require webpack-encore

# Symfony translation (Translations)
composer require symfony/translation

```


## Available tools

### Easy coding standard

Runs at every commit performed on the project, to assure the code follows the Drivania writing rules. Can also be run by using:

```
composer ecs
```

### PHPUnit 

```
composer test
```

### Psalm

```
composer psalm
```

### PHPStan

```
composer stan
```