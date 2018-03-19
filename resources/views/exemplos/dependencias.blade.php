composer require twbs/bootstrap
cp -r vendor/twbs/bootstrap/dist/ public/
Para que o bootstrap funcione, é preciso também adicionar a biblioteca JQuery.
Localize a versão corrente da biblioteca em seu website (http://jquery.com/download)
e salve o arquivo comprimido jquery-3.2.1.min.js (ou mais recente) na pasta public/js
=====================================================================

Para manipular o html utilizaremos a classe HTML
A partir da versão 5 do Laravel essa classe foi movida do core do framework para Laravel Collective
(https://laravelcollective.com/docs/5.4/html). Uma iniciativa que mantém classes que foram removidas do core do framework
em uma distribuição independente.

composer require "laravelcollective/html":"^5.4.0"
composer require "laravelcollective/html" -> instala a última versão

    Next, add your new provider to the providers array of config/app.php:

      'providers' => [
        // ...
        Collective\Html\HtmlServiceProvider::class,
        // ...
      ],

    Finally, add two class aliases to the aliases array of config/app.php:

      'aliases' => [
        // ...
          'Form' => Collective\Html\FormFacade::class,
          'Html' => Collective\Html\HtmlFacade::class,
        // ...
      ],
=====================================================================
https://packagist.org
procurei por fontawesome e instalei essa aqui erradamente
composer require fortawesome/font-awesome
Para deletar:
deletar a pasta em vendor: fortawesome
depois em composer.json apagar a linha:
"fortawesome/font-awesome": "^4.7",
depois limpar o cache para não reinstalar
php artisan cache:clear

https://packagist.org/packages/components/font-awesome
composer require components/font-awesome

copiar o arquivo fontawesome-all.min.css de vendor/componentes/font-awesome/css/
para public/css
e duplicar a pasta webfonts e colocar em public
======================================================================
