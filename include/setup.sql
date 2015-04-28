create table studentlist (
	name varchar(50),
	email varchar(50),
	password char(40),
	registrationdate datetime,
	localaddress varchar(50),
	major varchar(50),
	school enum('CSOM', 'A&S', 'Lynch', 'CSON'),
	subjects varchar(100)
);