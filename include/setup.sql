create table studentlist (
	name varchar(50),
	email varchar(50),
	password char(40),
	registrationdate datetime,
	localaddress varchar(50),
	major varchar(50),
	school enum('CSOM', 'A&S', 'Lynch', 'CSON'),
	subjects varchar(100),
	availability varchar(100)
);

create table tutorlist (
	name varchar(50),
	email varchar(50),
	password char(40),
	registrationdate datetime,
	localaddress varchar(50),
	major varchar(50),
	grade enum('Freshmen', 'Sophomore', 'Junior', 'Senior'),
	school enum('CSOM', 'A&S', 'Lynch', 'CSON'),
	subjects varchar(100),
	availability varchar(100),
	rating enum ('*', '**', '***', '****', '*****'),
	ratingcounter int ()
);