create database aula7;

create table produto(
idproduto int primary key auto_increment,
nome varchar (30),
estoque int,
valor double,
categoria varchar(20)
);