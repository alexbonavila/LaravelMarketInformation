## 15/04/16
Avui he començat a fer tots els apartats que demana a la wiki: Arquitectura, Calendari, versions, etc.
## 18/04/16
He acabat de fer wiki i estic esperant la correcció per arreglar els possibles errors que hagi vist el professor.
## 19/04/16 i 21/04/16 
He tornat a començar perquè m'he equivocat l'hora de fer el social login però, de moment tinc fet fins a la versió v0.0.1
## 22/04/16
Avui he redisenyat una mica la forma de emmagatzemar la informació a la BD, els canvis estan fets a la wiki, i també he comançat a fer les metodes get amb GuzzleHttp.
## 25/04/16
Després d'acabar els mètodes per interactuar amb l'API externa a la qual a partir d'ara hem referiré amb les sigles **MOD**(Markit On Demand) he fet els punts que tenia pendents a tasques: README.md, scrutinizer, etc.
## 26/04/16 i 27/04/16
He dissenyat tots els models de la BD nessecaris de moment i he execuat les migracións, per fer tot això també he fet un diagrama de la BD.
## 28/04/16
He començat a fer una mica de frontend és a dir a personalitzar la plantilla l'Admin LTE
## 02/05/16
He arreglat les BD després de la classe que ens a donat Sergi, i tambe he començat a fer la part de grafics al front end.
## 03/05/16 i 04/05/16
He intentat fer Vue però he tingut problemes amb npm per aixo he canviat de tasca. He començat a fer els controladors que omplen la BD i s'executem amb scheduler i també he ficat camp id a totes les taules i algun unique. I per ultim per fer les proves he creat una ruta de test que despres es borrara.
## 05/05/16
Ja tinc els controladors fets per persistir a la BD les dades que jo vull nomes falta ficar-ho a l'scheduler per acabar del tot amb aquesta part.
## 06/05/16
He fet dues comades artisan per executar tant des de consola com des de l'schedule per tant he fet una comanda per oplir la BD d'empreses i un altra per oplir la taula historica, també e actualitzat el readme amb aquesta informació.
Problema amb el Vue solucionat tenia el fitxer pakage.json si us avieu descarregat el projecte anteriorment recomano actualitzar, eliminar la carpeta node_modules i executar un:

`$ npm install`
## 09/05/16
Avui he ficat les dues eines que ha manat sergi per a classe una per a documentar codi(SAMI) i l'altra per saber l'abast dels testos(coveralls), també he començat a fer la pagina principal.
## 10/05/16 i 23/05/16
He estat uns dies ausent del credit per que tenia que fer feina pendent que tenia del curs en general encara que no he fet commits ni he ficat res al changelog he anat fent coses que mostrare a continuació:
* Pagina home del usuari amb una llista de les empreses, aquesta llista dona diferent informació està feta amb VUE i extreu la informació de la BD
* He començata a fer que l'uauari es puge descarregar informació de la api
## 24/05/16
Avui he fet una comanda que passa la taula de valors de mercats historics de la bd a diferents formats per que posteriorment l'usuari puge descarregar-sels. He utilitzat la llibreria Laravel Formatter

També he creat la pagina per descarregar la informació que es mostra a la web.

I per ultim he començat a fer la pagina que s'encarrega de fer els calculs de moment nomes tinc el formulari falta tota la "xixa"
## 25/05/16
Ja tinc feta la pagina de calculadora amb HTML5 i JS també  he comançat a fer la api per guardar els caluls
## 26/05/16
Avui he continualt la API per emmagatzemar els calculs hi també m'he donat conte que els que hem sumbministren la informació es a dir l'api de tercers ha ficat proteció per atacs DDos per aixó tindre que modificar les comandes que fins ara m'omplien la BD d'informació
## 27/05/16
Ja tinc acabades les mesures per evitar la protexió contra atacs DDos
Despres d'aixó he continuat amb la API per emmagatzemar els calculs i ja tinc la api feta i els testos per provar-la
## 28/05/16 i 19/05/16
Aquest fi de setmana he acabat de pulir la api i també he afegit mes testos
## 30/05/16
Avui dilluns he separat les rutes de les api de les web per no fer servir el mateix middlewware i per millorar l'organització, a continuació he deixat al 100% l'store de la calculadora , també he fet mes testos i per ultim he planificat quan i amb quina frequenciá s'executaran les tasques d'scheduler
## 31/05/16
Vista i backend per poder veure la informació en temps real feta, també he fet la relació 1a1 des de ApiKeys a Usuaris, i per ultim he acabat el formulari per guardar els calculs fets a la calculadora
## 01/06/16
Comensant a fer les vistes de l'historial, bugs arreclats a les vistes i als tests, primera versió de grafics.
## 02/06/16 i 03/06/16
Fent grafics, buscant on puc fer events io Cache i començant la memoria i la presentació.
## 04/06/16 i 05/06/16
Acabant els grafics, fent pagina d'informació de perfil, arreclant les vistes, arreclant els testos i millorant la API.
## 06/06/16
Fent les ultimes pinzellades al projecte, acabant presentació i memoria. 