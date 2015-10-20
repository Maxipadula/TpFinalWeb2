use tpFinal;

insert into rol (codigo_rol, descripcion)
values	(1, 'chofer'),
		(2, 'administrador'),
		(3, 'encargado');
        
/*select *
from rol;*/

insert into tipo_doc (id_tipo_doc, descripcion)
values (1, 'DNI'), 
       (2, 'Libreta Enrolamiento'), 
       (7, 'Libreta Civica');
       
       
       
       
insert into licencia (id_licencia, descripcion)
values ('A1', 'Motos de 2 ruedas hasta 50cc'),
	   ('A.2.1', 'Motos de 2 ruedas entre 50cc y 150cc'),
       ('A.2.2', 'Motos de 2 ruedas entre 150cc y 300cc'),
       ('A.3', 'Motos de 2 ruedas mas de 300cc'),
       ('A.4.1', 'Motos de 3 o 4 ruedas hasta 50cc'),
       ('A.4.2', 'Motos de 3 o 4 ruedas entre 50cc y 150cc'),
       ('A.4.3', 'Motos de 3 o 4 ruedas entre 150cc y 300cc'),
       ('A.4.4', 'Motos de 3 o 4 ruedas mas de 300cc'),
       ('P.A.1', 'PROFESIONAL Motos de 2 ruedas hasta 50cc'),
       ('P.A.2.1', 'PROFESIONAL Motos de 2 ruedas entre 50cc y 150cc'),
       ('P.A.2.2', 'PROFESIONAL Motos de 2 ruedas entre 150cc y 300cc'),
       ('P.A.3', 'PROFESIONAL Motos de 2 ruedas mas de 300cc'),
       ('P.A.4.1', 'PROFESIONAL Motos de 3 o 4 ruedas hasta 50cc'),
       ('P.A.4.2', 'PROFESIONAL Motos de 3 o 4 ruedas entre 50cc y 150cc'),
       ('P.A.4.3', 'PROFESIONAL Motos de 3 o 4 ruedas entre 150cc y 300cc'),
       ('P.A.4.4', 'PROFESIONAL Motos de 3 o 4 ruedas mas de 300cc'),
       ('B.1', 'Automóviles, camionetas y utilitarios hasta 3500kg'),
       ('B.2', 'Automóviles, camionetas y utilitarios hasta 3500kg con acoplado hasta 750kg'),
       ('C', 'Camión sin acoplado ni semiacoplado y casas rodantes motorizadas de más de 3500kg'),
       ('D.1', 'Vehículos de transporte hasta 4 pasajeros, excluido el conductor'),
       ('D.2.1', 'Vehículos de transporte de 5 y hasta 20 pasajeros, excluido el conductor'),
	   ('D.2.2', 'Vehículos de transporte de más de 20 pasajeros, excluido el conducto'),
	   ('E.1', 'Camiones articulados, con acoplado o semiacoplado'),
	   ('E.2', 'Maquinaria especial no agrícola'),
	   ('F', 'Discapacidad'),
	   ('G.1', 'Tractores Agricolas'),
	   ('G.2', 'Maquinaria Especial Agricola'),
       ('NO', 'NO tiene registro');
             

insert into usuario (id_usuario, usuario, nombre, pass, codigo_rol, id_licencia, id_tipo_doc, num_doc, fecha_nacimiento)
values	(10, 'pato','Patricio Lombardia','1234asd',3, 'NO', 1, '302584789','1965-10-23'),
		(20, 'santi','Santiago Ares','123kjl',2,'B.1', 1, '32147563','1984-04-23'),
		(30, 'maxi','Maximiliano Padula','12345qwe',1, 'E.1', 1, '33214562','1980-03-03'),
		(40, 'pepe','Pedro Juarez','123456rty',2,'NO', 1, '37895234','1994-01-14'),
		(50, 'moni','Monica Gimenez','1234123ghj',1,'E.1', 1, '30369852','1990-12-26'),
		(60, 'leo','Leonel Rodriguez','123123nhu',3,'C', 1, '34563218','1985-11-07');
        
/*select *
from usuario;*/

insert into modelo (id_modelo, descripcion)
values	(100, 'HD 78'),
		(200, 'HD 65'),
		(500, 'Oln 2.5 CS'),
		(600, 'Maxity');
        
/*select *
from modelo;*/



insert into acoplado (id_acoplado, descripcion, capacidad_peso)
values	(101, 'acoplado1', 2),
		(201, 'acoplado2', 2.5),
		(301, 'acoplado3', 3.3),
		(401, 'acoplado4', 1.9),
		(501, 'acolpado5', 2.1),
		(601, 'acoplado6', 3);
        
/*select *
from acoplado;*/

insert into estado (id_estado, descripcion)
	values('mm','muy malo'),
           ('m','malo'),
           ('r','regular'),
           ('b','bueno'),
           ('mb','muy bueno');
/*select*
from estado;*/

insert into marca(id_marca, descripcion)
values (1, 'Hyundai'),
	   (2, 'Foton'),
       (4, 'Renult');
       
insert into vehiculo (id_vehiculo, id_modelo, id_marca, combustible_capacidad, capacidad_carga)
values  (123, 100, 1, 100.00, 5225.00),
        (456, 200, 1, 100.00, 4200.00),
        (789, 500, 2, 100.00, 2500.00),
        (147, 600, 4, 130.00, 5000.00);

      

insert into transporte (id_transporte,  reportes, id_estado, id_vehiculo, combustible_km, combustible_actual, KM_unidad, num_chasis, num_motor, año_fabricacion, id_acoplado)
values	(1111, 'a', 'b', 123, 0.0, 50.45, 4532, 236589, 147852, 2005, 101),
        (2222, 'b', 'mb', 123, 0.0, 96.00, 2589, 963258, 852147, 2013, 201),
        (3333, 'c', 'mb', 123, 0.0, 78.58, 1589, 789456, 321987, 2014, 301),
        (4444, 'd', 'r', 456, 0.0, 20.36, 5025, 159753, 258456, 2007, 401),
        (5555, 'e', 'b', 456, 0.0, 15.23, 2014, 951357, 448866, 2011, 501),
		(6666, 'f', 'm', 789, 0.0, 69.50, 985, 358692, 69852, 2015, 601),
        (7777, 'g', 'mb', 147, 0.0, 120.36, 4025, 134679, 976431, 2013, 301),
        (8888, 'h', 'r', 147, 0.0, 70.58, 5505, 1357913, 791357, 2014, 401);
        
/*select *
from transporte;*/

insert into carga (id_carga, descripcion, peso)
values	(010, 'remeras', 1),
		(020, 'pantalones', 2),
		(030, 'buzos', 3),
		(040, 'medias', 4),
		(050, 'camperas', 5),
		(060, 'chalecos', 6);
        
/*select *
from carga;*/

insert into viaje (id_viaje, id_usuario, id_transporte, origen, km_recorridos, combustible_consumido,
				 destino, cliente, fecha, tiempo, id_carga)
values	(1122, 10, 2222, 'Buenos Aires', 1740, 10000, 'Florianopolis', 'Pedromania', '2015-06-05', 24, 030),
		(2233, 20, 6666, 'Salta', 1500, 8900, 'Buenos aires','Ropamania', '2015-08-09', 21, 020),
		(3344, 60, 5555, 'Rio Negro', 600, 4000, 'Chile','TodoRopa', '2015-10-11', 8, 060),
		(4455, 40, 1111, 'Cordoba', 1600, 9000, 'Bolivia','Todopordospesos', '2015-08-01', 20, 010),
		(5566, 30, 3333, 'Misiones',300, 4000, 'Montevideo','sisis', '2015-12-12', 3,040),
		(6677, 50, 4444, 'Mendoza', 900, 8500, 'Asuncion','nadanada', '2015-07-06', 7, 050);
        
/*select *
from viaje;*/

insert into mecanico (id_mecanico, nombre_y_apellido)
values	(001, 'Yanet Rodriguez'),
		(002, 'Monica Nicolosi'),
		(003, 'Walter Tin'),
		(004, 'Silvia Escobar'),
		(005, 'Ivan Lomba'),
		(006, 'Lucrecio Lunch');
        
/*select *
from mecanico;*/

insert into interno (id_mecanico)
values	(001),
		(005),
		(003),
		(004),
		(002),
		(006);
        
/*select *
from interno;*/

insert into externo (id_mecanico, empresa)
values	(005, 'ProduccionesR'),
		(003,'ReparadorDeTodo'),
		(004, 'TeReparo'),
		(006,'ReparacionDeCamiones'),
		(001,'El Camionazo'),
		(002, 'VeniVeni');
        
/*select *
from externo;*/

insert into reparacion (codigo_reparacion, id_mecanico, id_transporte, costo, fecha, repuestos)
values	(123, 006, 5555, 150000, '2015-08-06', 'motor y llantas'),
		(1234, 005, 4444, 80000,'2015-12-07', 'llantas'),
		(12345, 001, 1111, 75000,'2015-12-01', 'motor'),
		(123456, 002, 3333, 40000,'2015-01-01', 'cilindros y amortiguadores'),
		(1234567, 004, 2222, 88000,'2015-03-06', 'volante y motor'),
		(12345678, 003, 6666, 4800,'2015-06-26', 'guardabarros');
        
/*select *
from reparacion;*/













