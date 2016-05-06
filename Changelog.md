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