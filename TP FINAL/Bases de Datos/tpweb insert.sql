use tpFinal;

insert into rol (codigo_rol, descripcion)
values	(1,'chofer'),
		(2, 'administrador'),
		(3, 'supervisor');
        
/*select *
from dar_permiso
where descripcion = 'chofer ';*/

insert into tipo_doc (id_tipo_doc, descripcion)
values (1, 'DNI'), 
       (2, 'Libreta Enrolamiento'), 
       (7, 'Libreta Civica');

 /*select *
from tipo_doc;*/  

       
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

/*select *
from dar_permiso;*/

insert into permiso(id_permiso, descripcion)
	values(1,'chofer home'),
		  (2,'registrar vale'),
          (3,'registrar datos de viaje'),
		  (4,'administrador home'),
		  (5,'supervisor home'),
          (6,'ABM de usuarios'),
          (8,'ABM de mecanicos'),
          (9,'ABM de transportes'),
		  (10,'ABM de vehiculos'),
		  (11,'ABM de viajes'),
          (12,'ABM de reparaciones'),
          (13,'gestion de permisos'),
		  (7,'consulta de graficos');


          
insert into dar_permiso(id_permiso,codigo_rol)
	values(1,1),
		  (2,1),
		  (3,1),
          (4,2),
          (5,3),
          (6,2),
          (8,2),
          (9,2),
          (10,2),
          (11,3),
		  (12,3),
		  (7,3),
          (13,2),
		  (7,2);
          

/*select * 
from permiso;*/
          
insert into usuario (id_usuario, usuario, nombre, pass, fecha_nacimiento, id_tipo_doc, num_doc, id_licencia, codigo_rol)
values	(10, 'pato','Patricio Lombardia','1234asd','1965-10-23', 1, '302584789', 'NO',3),
		(20, 'santi','Santiago Ares','123kjl','1984-04-23', 1, '32147563','B.1',2),
		(30, 'maxi','Maximiliano Padula','12345qwe','1980-03-03',1, '33214562', 'E.1',1),
		(40, 'pepe','Pedro Juarez','123456rty','1994-01-14',1, '37895234','B.2',1),
		(50, 'moni','Monica Gimenez','1234123ghj','1990-12-26', 1, '30369852','E.1',1),
		(60, 'leo','Leonel Rodriguez','123123nhu','1985-11-07', 1, '34563218','C',3);
        

/*delete from usuario where id_usuario = 10;*/
        
/*SELECT * 
					FROM usuario U inner join
								  tipo_doc TD on U.id_tipo_doc = TD.id_tipo_doc
								  WHERE TD.id_tipo_doc = 1 AND  num_doc=302584789;   */


insert into modelo (id_modelo, descripcion)
values	(100, 'HD 78'),
		(200, 'HD 65'),
		(500, 'Oln 2.5 CS'),
		(600, 'Maxity');
        
/*select *
from modelo;*/


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
       (4, 'Renault');
       
/*select *
from marca;*/
       
insert into vehiculo (id_vehiculo, id_modelo, id_marca,capacidad_carga)
values  (123, 100, 1,5225.00),
        (456, 200, 1,4200.00),
        (789, 500, 2, 2500.00),
        (147, 600, 4,5000.00);



insert into transporte (id_transporte, id_estado, id_vehiculo, num_chasis, num_motor, anio_fabricacion,patente)
values	(1111, 'b', 123, 236589, 147852, 2005,'fkn 106'),
        (2222, 'mb', 123, 963258, 852147, 2013,'fmj 750'),
        (3333, 'mb', 123, 789456, 321987, 2014,'hgp 650'),
        (4444, 'r', 456, 159753, 258456, 2007,'dlo 890'),
        (5555, 'b', 456, 951357, 448866, 2011,'dgf 789'),
		(6666, 'm', 789, 358692, 69852, 2015,'fen 404'),
        (7777, 'mb',147, 134679, 976431, 2013,'oki 435'),
        (8888, 'r',789, 1357913, 791357, 2014,'dma 124');
        
/*SELECT MA.descripcion marca,MO.descripcion modelo, T.patente
											  FROM transporte T join
												   vehiculo V  on T.id_vehiculo = V.id_vehiculo join
												   modelo MO on V.id_modelo = MO.id_modelo join
												   marca MA on MA.id_marca = MA.id_marca*/
 
/*SELECT T.id_transporte, E.descripcion Estado, M.descripcion Marca, MO.descripcion Modelo, num_chasis NroChasis, num_motor, año_fabricacion, patente
										  FROM transporte T inner join 
											   estado E on T.id_estado = E.id_estado inner join 
											   vehiculo V on T.id_vehiculo = V.id_vehiculo inner join 
											   marca M on V.id_marca = M.id_marca inner join 
											   modelo MO on V.id_modelo = MO.id_modelo;*/      
        
/*select *
from transporte;*/

insert into acoplado (id_acoplado, descripcion)
values	(101, 'acoplado1'),
		(201, 'acoplado2'),
		(301, 'acoplado3'),
		(401, 'acoplado4'),
		(501, 'acolpado5'),
		(601, 'acoplado6');
    
/*select *
from acoplado;*/    

insert into viaje (id_viaje, id_usuario, id_transporte, origen, km_recorridos,
				 destino, cliente, fecha_inicio, fecha_fin, carga)
values	(1122, 10, 2222, 'Buenos Aires', 10000, 'Florianopolis', 'Pedromania', '2015-06-05 07:20:21', '2015-06-06 09:36:55', 'pantalones'),
		(2233, 20, 6666, 'Salta',8900, 'Buenos aires','Ropamania', '2015-08-09 07:00:20','2015-08-09 04:00:20', 'poleras'),
		(3344, 60, 5555, 'Rio Negro',  4000, 'Chile','TodoRopa', '2015-10-11 05:00:00', '2015-11-11 01:18:05', 'pantalones'),
		(4455, 40, 1111, 'Cordoba',  9000, 'Bolivia','Todopordospesos', '2015-08-01 05:25:54','2015-08-01 18:25:55','remeras'),
		(5566, 30, 3333, 'Misiones', 4000, 'Montevideo','sisis', '2015-12-12 12:30:34', '2015-12-12 16:30:00','medias'),
		(6677, 50, 4444, 'Mendoza',  8500, 'Asuncion','nadanada', '2015-07-06 12:00:20', '2015-07-06 20:40:29','buzos');

select *
from viaje;

insert into vale_combustible(id_vc,id_viaje,  fecha_hora, lugar, costo, cantidad)
values (1,1122,'2015-06-05 15:11:25', 'Entre Rios', 5000.00, 250.00),   
       (2,1122,'2015-06-06 07:36:55', 'canasvieiras', 2000.00, 100.00),
	   (3,3344,'2015-10-11 07:16:45', 'Mendoza', 2600.00, 200.00),
	   (4,6677,'2015-07-06 15:30:14', 'Buenos Aires', 2250.00, 150.00);
      
/*select *
from vale_combustible;*/
 
insert into lleva(id_acoplado,id_transporte,id_viaje)
values(101,2222,1122),   
	  (101,5555,3344),  
      (401,1111,4455),  
      (601,4444,6677);  

/*select *
from viaje;*/

insert into repuesto(id_repuesto,descripcion,costo)
values(1,'motor',15000),
	  (2,'llanta',2000),
      (3,'rueda',2500),
      (4,'tapa de cilindro',8500),
      (5,'amortiguador',1200),
      (6,'volante',8750),
      (7,'paragolpes',4750),
      (8,'guardabarro',1250);
      
/*select * 
from repuesto;*/      

insert into orden (id_orden,id_repuesto,cantidad)
values	(1,1,1),
		(2,2,2),
        (3,2,4),
        (4,1,1),
        (5,4,1),
        (6,5,4),
        (7,6,1),
        (8,1,1),
        (9,8,2);
        
/*select * 
from orden;*/        
        
insert into mecanico (id_mecanico, nombre)
values	(001, 'Yanet Rodriguez'),
		(002, 'Monica Nicolosi'),
		(003, 'Walter Tin'),
		(004, 'Silvia Escobar'),
		(005, 'Ivan Lomba'),
		(006, 'Lucrecio Lunch');
        
select * 
from mecanico;     
        
insert into reparacion (codigo_reparacion, id_mecanico, id_transporte,id_orden, costo, fecha)
values	(123, 006, 5555,1, 15000, '2015-08-06'),
        (124, 006, 5555,2, 4000, '2015-08-06'),
		(125, 005, 4444,3, 8000,'2015-12-07'),
		(126, 001, 1111,4, 8000,'2015-12-01'),
		(127, 002, 3333,5, 8500,'2015-01-01'),
        (128, 002, 3333,6, 4800,'2015-01-01'),
		(129, 004, 2222,7, 8750,'2015-03-06'),
        (130, 004, 2222,8,7450,'2015-03-06'),
		(131, 003, 6666,9, 2500,'2015-06-26');

        
/*select * 
from reparacion;*/        
        
