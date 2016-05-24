# LaravelMarketInformation
## Descripció
LaravelMarketInformation és una aplicació web feta amb Laravel, aquesta aplicació el que fa es proveir d'informació financera tant en temps real com històrica (a partir del 2015), aquesta aplicació està pensada exclusivament per a clients registrats, tot i que això no vol dir que els que no estan logats no pugin fer res, tindran una main page per poder veure una demo del que es trobaran si es registren.
## Budges
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/alexbonavila/LaravelMarketInformation/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/alexbonavila/LaravelMarketInformation/?branch=master) [![Build Status](https://travis-ci.org/alexbonavila/LaravelMarketInformation.svg?branch=master)](https://travis-ci.org/alexbonavila/LaravelMarketInformation) [![Coverage Status](https://coveralls.io/repos/github/alexbonavila/LaravelMarketInformation/badge.svg?branch=master)](https://coveralls.io/github/alexbonavila/LaravelMarketInformation?branch=master)
## Feed DB commands
Aquesta comanda el que fa es omplir la BD amb els simbols de les empreses de la NASDAQ:

`$ php artisan companies_table:feed`

La seguent comanda el que fa és omplir la BD Historica amb la informació demanada.

`$ php artisan history_table:feed`


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
