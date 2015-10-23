use tpFinal;

insert into rol (codigo_rol, descripcion)
values	(1, 'chofer'),
		(2, 'administrador'),
		(3, 'encargado');
        
select *
from rol;

insert into usuario (id_usuario, usuario, nombre, contraseña, codigo_rol)
values	(10, 'pato','Patricio',1234,3),
		(20, 'santi','Santiago',123,2),
		(30, 'maxi','Maximiliano',12345,1),
		(40, 'pepe','Pedro',123456,2),
		(50, 'moni','Monica',1234123,1),
		(60, 'leo','Leonel',123123,3);
        
select *
from usuario;

insert into modelo (id_modelo, descripcion)
values	(100, 'Austin Loadstan'),
		(200, 'Mercedes-Benz Econic'),
		(300, 'Lancia 6Ro'),
		(400, 'Kia Bongo'),
		(500, 'Renault Bacalao'),
		(600, 'Renault Magnum');
        
select *
from modelo;

insert into alarma (id_alarma, tiene)
values	(11, 'si'),
		(21, 'no');
        
select *
from alarma;

insert into acoplado (id_acoplado, descripcion, capacidad_peso)
values	(101, 'acoplado1', 2),
		(201, 'acoplado2', 2.5),
		(301, 'acoplado3', 3.3),
		(401, 'acoplado4', 1.9),
		(501, 'acolpado5', 2.1),
		(601, 'acoplado6', 3);
        
select *
from acoplado;

insert into vehiculo (id_vehiculo, reportes, estado, KM_unidad, combustible, id_modelo, id_alarma, id_acoplado)
values	(1111, 'a', 'bueno', 1000, 1200, 100, 11, 101),
		(2222, 'b', 'bueno', 900, 1000, 600, 11, 201),
		(3333, 'c', 'muy bueno', 1200, 1800, 500, 21, 601),
		(4444, 'd', 'regular', 1300, 2000, 400, 21, 501),
		(5555, 'e', 'regular', 850, 900, 200, 11,301),
		(6666, 'f', 'muy bueno', 925, 890, 300, 21, 401);
        
select *
from vehiculo;

insert into carga (id_carga, descripcion, peso)
values	(010, 'remeras', 1),
		(020, 'pantalones', 2),
		(030, 'buzos', 3),
		(040, 'medias', 4),
		(050, 'camperas', 5),
		(060, 'chalecos', 6);
        
select *
from carga;

insert into viaje (id_viaje, id_usuario, id_vehiculo, origen, km_recorridos, combustible_consumido,
				personal, destino, cliente, fecha, tiempo, id_carga)
values	(1122, 10, 2222, 'Buenos Aires', 1740, 10000, 'Patricio', 'Florianopolis', 'Pedromania', '2015-06-05', 24, 030),
		(2233, 20, 6666, 'Salta', 1500, 8900, 'Maximiliano', 'Buenos aires','Ropamania', '2015-08-09', 21, 020),
		(3344, 60, 5555, 'Rio Negro', 600, 4000, 'Pedro', 'Chile','TodoRopa', '2015-10-11', 8, 060),
		(4455, 40, 1111, 'Cordoba', 1600, 9000, 'Claudio', 'Bolivia','Todopordospesos', '2015-08-01', 20, 010),
		(5566, 30, 3333, 'Misiones',300, 4000, 'Carlos', 'Montevideo','sisis', '2015-12-12', 3,040),
		(6677, 50, 4444, 'Mendoza', 900, 8500, 'Ramiro', 'Asuncion','nadanada', '2015-07-06', 7, 050);
        
select *
from viaje;

insert into mecanico (id_mecanico, nombre_y_apellido)
values	(001, 'Yanet Rodriguez'),
		(002, 'Monica Nicolosi'),
		(003, 'Walter Tin'),
		(004, 'Silvia Escobar'),
		(005, 'Ivan Lomba'),
		(006, 'Lucrecio Lunch');
        
select *
from mecanico;

insert into interno (id_mecanico)
values	(001),
		(005),
		(003),
		(004),
		(002),
		(006);
        
select *
from interno;

insert into externo (id_mecanico, empresa)
values	(005, 'ProduccionesR'),
		(003,'ReparadorDeTodo'),
		(004, 'TeReparo'),
		(006,'ReparacionDeCamiones'),
		(001,'El Camionazo'),
		(002, 'VeniVeni');
        
select *
from externo;

insert into reparacion (codigo_reparacion, id_mecanico, id_vehiculo, costo, fecha, repuestos)
values	(123, 006, 555, 150000, '2015-08-06', 'motor y llantas'),
		(1234, 005, 444, 80000,'2015-12-07', 'llantas'),
		(12345, 001, 111, 75000,'2015-12-01', 'motor'),
		(123456, 002, 333, 40000,'2015-01-01', 'cilindros y amortiguadores'),
		(1234567, 004, 222, 88000,'2015-03-06', 'volante y motor'),
		(12345678, 003, 666, 4800,'2015-06-26', 'guardabarros');
        
select *
from reparacion;













