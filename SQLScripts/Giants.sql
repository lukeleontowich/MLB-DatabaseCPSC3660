INSERT into PLAYER (firstName,lastName,number,salary,GP) values 
		('Buster','Posey','28','21400000','113'),
		('Brandon','Crawford','35','6450000','138'),
		('Donovan','Solano','7','13000000','101'),
		('Brandon','Belt','9','12500000','97'),
		('Darin','Ruf','33','7000000','117'),
		('Wilmer','Flores','41','8400000','139'),
		('Evan','Longoria','10','16250000','81'),
		('Steven','Duggar','6','925000','107'),
		('Lamonte','Wade','31','8425000','109'),
		('Austin','Slater','13','11111000','129'),
		('Kevin','Gausman','34','21400000','34'),
		('Logan','Webb','62','3400000','48'),
		('Anthony','DeSclafini','26','12300000','29'),
		('Alex','Wood','67','7050000','36'),
		('Johnny','Cueto','47','10000000','40');


INSERT into PLAYSFOR (lastName,teamName) values ('Posey','Giants'),
						('Crawford','Giants'),
						('Solano','Giants'),
						('Belt','Giants'),
						('Ruf','Giants'),
						('Flores','Giants'),
						('Longoria','Giants'),
						('Duggar','Giants'),
						('Wade','Giants'),
						('Slater','Giants'),
						('Gausman','Giants'),
						('Webb','Giants'),
						('DeSclafini','Giants'),
						('Wood','Giants'),
						('Cueto','Giants');



INSERT into BATTER (lastName,position, H, HBP, AB, HR, RBI, OBP, BB, SB) values 
						('Posey','Backcatcher','120','32','395','18','56','.390','60','78'),
						('Crawford','Shortstop','81','18','239','24','47','.299','47','66'),
						('Solano','2nd Base','99','12','221','8','41','.209','36','55'),
						('Belt','1st Base','78','20','198','16','35','.278','42','37'),
						('Ruf','Left Field','100','28','152','31','24','.233','39','62'),
						('Flores','2nd Base','85','28','189','19','44','.199','51','51'),
						('Longoria','3rd Base','111','16','122','26','32','.288','32','41'),
						('Duggar','Center Field','104','25','200','26','29','.246','45','63'),
						('Wade','Left Field','89','7','221','34','34','.154','20','20'),
						('Slater','Right Field','66','23','274','12','32','.320','55','34');


INSERT into PITCHER (lastName, starterCloser, wins, losses, runsAllowed, ERA, SO) values
						('Gausman','Starter','33','14','65','2.81','227'),
						('Webb','Starter','11','3','57','3.03','301'),
						('DeSclafini','Closer','21','12','51','2.89','190'),
						('Wood','Starter','25','9','60','3.54','278'),
						('Cueto','Closer','13','7','54','2.41','213');

