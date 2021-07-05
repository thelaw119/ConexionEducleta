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


create table tipo_producto(
id_tipo int not null auto_increment,
nombre_tipo varchar(50) not null,
descripcion_tipo varchar(100) not null,
primary key(id_tipo));

create table Productos(
id_producto int not null auto_increment,
nombre varchar(50) not null,
descripcion varchar(500) not null,
material varchar(500) not null,
costo int not null,
id_tipo int not null,
primary key(id_producto),
foreign key(id_tipo) references tipo_producto(id_tipo));

INSERT INTO tipo_producto(`nombre_tipo`,`descripcion_tipo`)
VALUES("Servicio", "Servicios especializados de Educleta"),("Productos", "Productos especializados de Educleta");

INSERT INTO productos(nombre,descripcion,material,costo,id_tipo)
VALUES("A la Escuela en Bicicleta","Programa dirigido acomunidad escolarque tiene porobjetivo promover el traslado seguro en bicicleta de estudiantes desde su casa hasta su lugar de estudio","PC, Data, Bicicletas y cascos, 1 monitor por cada 15 participantes",2 ,1),
("Biciescuela","Evento de seguridad y convivencia vial en espacios públicos que tiene por objetivo fomentar la educación vial para todas las edades","Lonas de aprendizaje, bicicletas y cascos, PC, Data, Bicicletas y cascos, 1 monitor por cada 15 participantes",2 ,1),
("Capacitaciones","Clase teórico-práctica dirigida a estudiantes y trabajadores que tiene por objetivo fomentar la prevención de siniestros viales","Lonas de aprendizaje, bicicletas y cascos, PC, Data, Bicicletas y cascos, 1 monitor por cada 15 participantes",2,1);


delete from productos where id_producto = 4


select * from productos;
select * from tipo_producto;

INSERT INTO Perfiles(`nombre_perfil`,`descripcion_perfil`)
VALUES("Administrador","Administrador de la App"),("Cliente","Cliente Basico");

INSERT INTO Usuarios(`nick_usuario`,`nombre_completo`,`correo_usuario`,`password_usuario`,`id_perfil`)
VALUES("x","Juan Perez Guzman","jperezguzman@gmail.com","x",1);

select * from usuarios;
select * from perfiles;


select usuarios.id_usuario, usuarios.nick_usuario, usuarios.nombre_completo, usuarios.correo_usuario, usuarios.password_usuario, perfiles.nombre_perfil from usuarios 
inner join perfiles on perfiles.id_perfil = usuarios.id_perfil where usuarios.nick_usuario = '1' and usuarios.password_usuario = 'a';

	select productos.nombre, productos.descripcion, productos.material, productos.costo, tipo_producto.nombre_tipo, tipo_producto.descripcion_tipo  from productos 
	inner join tipo_producto on tipo_producto.id_tipo = productos.id_tipo;