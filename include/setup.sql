create table studentlist (
	name varchar(50),
	gender enum('male','female','other'),
	email varchar(50),
	password char(40),
	phonenumber char(12),
	registrationdate datetime,
	localaddress varchar(50),
	major varchar(50),
	school enum('CSOM', 'A&S', 'Lynch', 'CSON'),
	subjects varchar(200),
	availability varchar(1000),
	comments varchar(4000)
);

create table tutorlist (
	name varchar(50),
	gender enum('male','female','other'),
	email varchar(50),
	password char(40),
	phonenumber char(12),
	registrationdate datetime,
	localaddress varchar(50),
	major varchar(50),
	grade enum('Freshmen', 'Sophomore', 'Junior', 'Senior'),
	school enum('CSOM', 'A&S', 'Lynch', 'CSON'),
	subjects varchar(200),
	availability varchar(1000),
	rating enum ('*', '**', '***', '****', '*****'),
	ratingcounter integer default 0,
	comments varchar(4000)
);