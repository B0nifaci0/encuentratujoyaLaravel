create table users(
	id_user int not null primary key auto_increment,
	username varchar(100),
	email varchar(100),
	password varchar(100)
)engine = innoDB

create table customers(
	id_customer int not null primary key auto_increment,
	name varchar(50),
	surnames varchar(50),
	telefono varchar(12),
	id_user int not null,
	foreign key (id_user) references users(id_user)
)engine = innoDB


create table shops(
	id_shop int not null primary key auto_increment,
	name varchar(50),
	image varchar(50),
	web_page varchar(150),
	id_user int not null,
	foreign key (id_user) references users (id_user)
)engine = innoDB

create table branches(
	id_branch int not null primary key auto_increment,
	name varchar(50),
	address varchar(150),
	latitude varchar(20),
	longitude varchar(20),
	phone_number varchar(15),
	id_shop int not null,
	foreign key (id_shop) references shops(id_shop)
)engine = innoDB

create table purchases(
	id_purchase int not null primary key auto_increment,
	date datetime,
	id_customer int not null,
	foreign key (id_customer) references customers(id_customer)
)engine = innoDB

create table products(
	id_product int not null primary key auto_increment,
	name varchar(100),
	description varchar(350),
	purity int,
	weight double,
	price double,
	image varchar(150),
	nationality varchar(100)
)
