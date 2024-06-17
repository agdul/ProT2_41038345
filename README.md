Hola buenas gracias por visitar mi codigo.


Algunos aspectos a considerar al momento de correcion profes:
-Entiendo que la consiga en el apartado de Quienes Somos, sugiere que useremos (Cards). Devido al enfoque y a la funcionalidad que el sito al cual va a ser destinado no hay la necesidad de implementar en esa seccion los cards. Sin embargo los utilice y los deje a modo de ejemplo debajo del todo en el index (Solo se puede acceder tocando en el logotipo del navbar) porque van a ser parte del apartado de Prodcutos donde proximanente estara esa implementacion de los cards, sin embargo los deje vistos.

-Acerca de me quedo corto no sabia que mas dibujarle quedo escueto pero conciso


Problemas que surgieron y no pude fixar: 
(para pulir y mejor en el acabado final del diseno)

layout.php->Header->img :
El tamano es una cosa que me resulto muy dificil manejar nose que paso pero no logre dejarlo como me gustaria, que la imagen cuando sea pantalla muy grande la imagen de bienvenida sea mas reducida pero no tuve exito. (si me podrian ayudar fixear se agradece)

Comentarios generales: 
roots:
index -> http://localhost/ProT2_41038345/index
quienes somos -> http://localhost/ProT2_41038345/quienes_somos
acerca de -> http://localhost/ProT2_41038345/acerca_de
registro -> http://localhost/ProT2_41038345/registrate
login -> http://localhost/ProT2_41038345/login


-Agradecería mucho sus comentarios y sugerencias sobre cómo puedo mejorar tanto en aspectos de estilo y maquetación como en la respuesta 
y funcionalidad del sitio.

-Desde ya muchas gracias. Hamm, Abdul













# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
# ProT2_41038345
