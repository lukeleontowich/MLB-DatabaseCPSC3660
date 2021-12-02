INSERT into PLAYER (firstName,lastName,number,salary,GP) values 
		('David','Fletcher','28','16400000','113'),
		('Shohei','Ohtani','17','21450000','138'),
		('Jack','Mayfield','7','13000000','101'),
		('Mike','Trout','34','29500000','130'),
		('Jared','Walsh','9','12500000','97'),
		('Jo','Adell','33','7000000','117'),
		('Brandon','Marsh','41','8400000','139'),
		('Max','Stassi','10','16250000','81'),
		('Louis','Rengifo','6','925000','107'),
		('Juan','Lagares','31','8425000','109'),
		('Jamie','Barria','62','3400000','48'),
		('Packy','Naughton','26','12300000','29'),
		('Janson','Junk','67','7050000','36'),
		('Alex','Cobb','47','10000000','40');


INSERT into PLAYSFOR (lastName,teamName) values ('Fletcher','Angels'),
						('Ohtani','Angels'),
						('Mayfield','Angels'),
						('Trout','Angels'),
						('Walsh','Angels'),
						('Adell','Angels'),
						('Marsh','Angels'),
						('Stassi','Angels'),
						('Rengifo','Angels'),
						('Lagares','Angels'),
						('Barria','Angels'),
						('Naughton','Angels'),
						('Junk','Angels'),
						('Cobb','Angels');



INSERT into BATTER (lastName,position, H, HBP, AB, HR, RBI, OBP, BB, SB) values 
						('Fletcher','Backcatcher','120','32','395','18','56','.390','60','78'),
						('Mayfield','Shortstop','81','18','239','24','47','.299','47','66'),
						('Trout','2nd Base','99','12','221','8','41','.209','36','55'),
						('Walsh','1st Base','78','20','198','16','35','.278','42','37'),
						('Adell','Left Field','100','28','152','31','24','.233','39','62'),
						('Marsh','2nd Base','85','28','189','19','44','.199','51','51'),
						('Stassi','3rd Base','111','16','122','26','32','.288','32','41'),
						('Rengifo','Center Field','104','25','200','26','29','.246','45','63'),
						('Lagares','Left Field','89','7','221','34','34','.154','20','20');


INSERT into PITCHER (lastName, starterCloser, wins, losses, runsAllowed, ERA, SO) values
						('Ohtani','Starter','33','14','65','1.65','227'),
						('Barria','Starter','11','3','57','3.03','301'),
						('Naughton','Closer','21','12','51','2.89','190'),
						('Junk','Starter','25','9','60','3.54','278'),
						('Cobb','Closer','13','7','54','2.41','213');
