drop database miztli;

create database miztli;

use miztli;

DROP TABLE IF EXISTS login;
CREATE TABLE IF NOT EXISTS login(
id int not null, 
user varchar(250) not null, 
password varchar(250) not null, 
email varchar(250) not null, 
pasadmin varchar(250) not null, 
rol int(3)
) 
Engine=InnoDB;

DROP TABLE IF EXISTS products;
CREATE TABLE IF NOT EXISTS products(
id_products int not null primary key, 
name varchar(50) not null, 
description varchar(100) not null, 
price_venta float not null,
price_compra float not null,
stock int not null,
url_img varchar(100) not null
) 
Engine=InnoDB;

-- insertar datos de login
select * from login;

INSERT INTO login VALUES(1,"administrador","1234","admin@gmail.com","123456",1) ;
INSERT INTO login VALUES(2,"fatima","0000","fatiM@gmail.com","1111",1) ;
INSERT INTO login VALUES(3,"gaby","pandeelote","gaby@gmail.com","gasabo",1) ;
INSERT INTO login VALUES(4,"yuczara","654321","yuczara@gmail.com","123456",1) ;

-- insertar datos de products
select * from products;

INSERT INTO products VALUES(1,"Conjunto Top","Top de tirante de cuadros con falda delgada",212) ;
INSERT INTO products VALUES(2,"Vestido Tartan","Vestido con patron de tartan de dos colores",150) ;
INSERT INTO products VALUES(3,"Camiseta y pantalon de cargo","Conjunto camiseta y pantalones de cargo",430) ;
INSERT INTO products VALUES(4,"Conjunto","Conjunto top de tirantes corto unicolor con falda",198) ;
INSERT INTO products VALUES(5,"Camisa pelplum","Camisa pelplum fruncido floral",185) ;
INSERT INTO products VALUES(6,"Vestido estampado floral","Vestido con estampado floral margarita",296) ;
INSERT INTO products VALUES(7,"Vaqueros","Vaqueros mom rotos con boton",554) ;
INSERT INTO products VALUES(8,"Camiseta de mariposa","Camiseta con estampados de mariposa",173) ;