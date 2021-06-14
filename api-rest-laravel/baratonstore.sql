create database if not exists baraton_store;
use baraton_store;

create table users(
id int(255) auto_increment not null,
name varchar(50),
email varchar(255),
user_name varchar(255) not null,
password varchar(255) not null,
constraint pk_users primary key(id)
)engine=InnoDb;

create table categories(
id int(255) auto_increment not null,
name varchar(50),
parent_id int(255),
constraint pk_categories primary key(id)
)engine=InnoDb;

create table products(
id int(255) auto_increment not null,
name varchar(50),
price varchar(255),
available tinyint(1),
price int(255),
stock_quantity int(255),
description varchar(255) not null,
quantity varchar(255) not null,
constraint pk_products primary key(id)
)engine=InnoDb;

create table order_users_products(
id int(255) auto_increment not null,
guide int(255),
product_id int(255),
user_id int(255),
state varchar(100),
constraint  pk_order_users_products primary key(id)
constraint  fk_oup_product  foreign key(product_id) references products(id)
constraint  fk_oup_user  foreign key(user_id) references users(id)
)engine=InnoDb;

