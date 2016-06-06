# LaravelMarketInformation
## Descripció
LaravelMarketInformation és una aplicació web feta amb Laravel, aquesta aplicació el que fa es proveir d'informació financera tant en temps real com històrica (amb 2 anys d'antiguitat), aquesta aplicació està pensada exclusivament per a clients registrats, tot i que això no vol dir que els que no estan logats no pugin fer res, tindran una Landingpage per poder veure quantre pinzellades del que es trobaran si es registren.
## Budges
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/alexbonavila/LaravelMarketInformation/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/alexbonavila/LaravelMarketInformation/?branch=master) [![Build Status](https://travis-ci.org/alexbonavila/LaravelMarketInformation.svg?branch=master)](https://travis-ci.org/alexbonavila/LaravelMarketInformation) [![Coverage Status](https://coveralls.io/repos/github/alexbonavila/LaravelMarketInformation/badge.svg?branch=master)](https://coveralls.io/github/alexbonavila/LaravelMarketInformation?branch=master)
## Instalació
1. Instal·lar al nostre servidor donar els permisos necessaris.
`$ composer require alexbonavila/laravel-market-information`

2. Executar les migracions
`$ php artisan migrate`

3. Omplir la taula Companies
`$ php artisan companies_table:feed`

4. Omplir la taula de històrica
`$ php artisan history_table:feed`

5. Passar la taula històrica a tots els arxius i formats
`$ php artisan file_creator:create`

6. Configurar el chron per que executi l'scheduler 
https://laravel.com/docs/master/scheduling

7. Anar a l'arxiu `/resources/views/layouts/partials/graph.blade.php` i canviar el domini `localhost:8000` de la linia **19** pel teu

**Opcional:** si no configureu l'scheduler executeu aquesta comanda
`$ php artisan company_follow:feed`

## Feed DB commands
Aquesta comanda el que fa es omplir la BD amb els simbols de les empreses de la NASDAQ
`$ php artisan companies_table:feed`

La seguent comanda el que fa és omplir la BD Historica amb la informació demanada
`$ php artisan history_table:feed`

Aquesta comanda serveix per passar l'historic a arxius en els seguents formats(XML, JSON, YML i CSV)
`$ php artisan file_creator:create`

Per últim tenim aquesta comanda que serveix per fer un seguiment del valor actual de les accions
`$ php artisan company_follow:feed`

## Llibreries de terçers
GuzzleHttp per les peticions HTTP des de PHP:

https://github.com/guzzle/guzzle

Laravel Formatter per canviar entre formats JSON, XML, CSV i YML:

https://github.com/SoapBox/laravel-formatter
## Changelog
Web URL:

https://github.com/alexbonavila/LaravelMarketInformation/blob/master/Changelog.md

Project Location

`LaravelMarketInformation/Changelog.md`
## Links externs
### Documentació
http://alexbonavila.github.io/DocumentationLMI/public/api/master/
### Wiki
http://acacha.org/mediawiki/Usuari:Alex_bonavila/Credit_de_sintesi
### Documentació llibreries de tercers
http://docs.guzzlephp.org/en/latest/
### Presentació
http://alexbonavila.github.io/PresentacioLaravelMarketInformation
### Addressa
http://laravelmarketinformation.tk/
