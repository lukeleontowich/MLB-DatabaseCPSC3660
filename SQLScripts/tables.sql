
CREATE TABLE PLAYER (
	firstName varchar(32) NOT NULL,
	lastName varchar(32) NOT NULL,
	number int,
    salary int,
    DL varchar(8),
    GP int,
    PRIMARY KEY (lastName)
);

CREATE TABLE PITCHER (
	lastName varchar(32) NOT NULL,
    starterCloser varchar (16),
    wins int,
    losses int,
    runsAllowed int,
    ERA double,
    SO int,
    PRIMARY KEY (lastName),
    FOREIGN KEY (lastName) REFERENCES PLAYER(lastName)
);

CREATE TABLE BATTER (
	lastName varchar(32) NOT NULL,
    position varchar(32),
    H int,
    HBP double,
    AB int,
    HR int,
    RBI int,
    OBP double,
    BB int,
    SB int,
	PRIMARY KEY (lastName),
	FOREIGN KEY (lastName) REFERENCES PLAYER(lastName)
);

CREATE TABLE LEAGUE (
	leagueName varchar(32) NOT NULL,
    DHallowed bool,
    ESTdate varchar(32),
    numTeams int,
    PRIMARY KEY (leagueName)
);

CREATE TABLE TEAM (
	city varchar(32) NOT NULL,
    teamName varchar(32) NOT NULL,
    leagueName varchar(32) NOT NULL,
    wins int,
    losses int,
    manager varchar(32),
    PRIMARY KEY (teamName),
    FOREIGN KEY (leagueName) REFERENCES LEAGUE(leagueName)
);

CREATE TABLE PLAYSFOR (
	lastName varchar(32) NOT NULL,
    teamName varchar(32) NOT NULL,
    FOREIGN KEY (lastName) REFERENCES PLAYER (lastName),
    FOREIGN KEY (teamName) REFERENCES TEAM (teamName)
);


