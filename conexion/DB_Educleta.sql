create database educleta;
use educleta;

create table Perfiles(
id_perfil int not null auto_increment,
nombre_perfil varchar(50) not null,
descripcion_perfil varchar(100) not null,
primary key(id_perfil));

create table Usuarios(
id_usuario int not null auto_increment,
nick_usuario varchar(100) not null,
nombre_completo varchar(100) not null,
correo_usuario varchar(100) not null,
password_usuario varchar(100) not null,
id_perfil int not null,
foreign key(id_perfil) references Perfiles(id_perfil),
primary key(id_usuario));

INSERT INTO Perfiles(`nombre_perfil`,`descripcion_perfil`)
VALUES("Administrador","Administrador de la App"),("Cliente","Cliente Basico");

INSERT INTO Usuarios(`nick_usuario`,`nombre_completo`,`correo_usuario`,`password_usuario`,`id_perfil`)
VALUES("x","Juan Perez Guzman","jperezguzman@gmail.com","x",1);

select * from usuarios;
select * from perfiles;


select usuarios.id_usuario, usuarios.nick_usuario, usuarios.nombre_completo, usuarios.correo_usuario, usuarios.password_usuario, perfiles.nombre_perfil from usuarios 
inner join perfiles on perfiles.id_perfil = usuarios.id_perfil where usuarios.nick_usuario = '1' and usuarios.password_usuario = 'a';