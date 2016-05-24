# Doinn - Challenge - L1

![alt tag](http://i67.tinypic.com/5n6gir.png)

### Português

O desafio é descobrir se um endereço pertence a AREA 1, AREA 2 ou NENHUMA.

Criar uma API Restful que recebe os endereços:

1. Av Casal Ribeiro, 28, Lisboa, Portugal

2. Rua Eng D.António Castelo Branco 184,Cascais,Portugal

3. Av. Infante Dom Henrique 1,Lisboa,Portugal

4. R. Luís Xavier Palmeirim, Cascais,Portugal 

Para cada requisição deve-se efetuar uma outra requisição ao Google Maps API, receber o JSON com a Latitude e Longitude do endereço, verificar na tabela AREAS a qual área o endereço pertence. 

Retornar um JSON com a área.

#### Exemplo

{
"address":"area 1"
}

= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = 

### English

The challenge is build an API Restful that check if a certain address belongs to AREA 1, AREA 2 or none of them.

The API must receive the addresses bellow as parameters:

1. Av Casal Ribeiro, 28, Lisbon, Portugal

2. Rua Eng D.António Castelo Branco 184, Cascais, Portugal

3. Av. Infante Dom Henrique 1, Lisbon, Portugal

4. R. Luis Xavier Palmeirim, Cascais, Portugal

For each request to API make another to Google Maps API, to get the latitude and longitude and check the AREAS table. Finaly, return a JSON with the area that the address belongs.

#### Example

{
"address":"area 1"
}

= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = 

### Framework

Laravel 5.1


###Table Structure - SQL

CREATE TABLE `areas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1;

INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.171481132507324', '38.70200622596987','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.144723415374756','38.705547864391185','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.200039869174361','38.69596523588061','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.219952588900924','38.69355360353533','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.227334028109908','38.69824281399278','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.20656300149858','38.7157911301007','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.193516736850142','38.71552324925408','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.190941816195846','38.71029937208011','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.183560376986861','38.714585658384664','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.177380567416549','38.714585658384664','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.175492292270064','38.71994315484015','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.173947339877486','38.72583593709354','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.173947339877486','38.733067323863544','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.171029096469283','38.734674199296855','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.170514112338424','38.73976239969006','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.161416059359908','38.74418080594092','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.144593244418502','38.72503240449191','area 1');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.136010175570846','38.70721844505298','area 1');

INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.411011701449752','38.701859978513326','area 2');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.415989881381392','38.700386334315596','area 2');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.41856480203569','38.697974851036754','area 2');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.419938093051314','38.69623317365645','area 2');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.418393140658736','38.69382155034484','area 2');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.42028141580522','38.69154383144893','area 2');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.421654706820846','38.68980199747674','area 2');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.427147870883346','38.68980199747674','area 2');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.434872632846236','38.69234774051695','area 2');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.440365796908736','38.695161351111544','area 2');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.435730939731002','38.700788240290166','area 2');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.428692823275924','38.705476976435186','area 2');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.420109754428267','38.70681655886571','area 2');
INSERT INTO `areas` ( `lat`, `lng`, `name` ) VALUES ('-9.412728315219283','38.7074863406694','area 2');


###Google Maps

http://maps.google.com/maps/api/geocode/json?sensor=false&address=

