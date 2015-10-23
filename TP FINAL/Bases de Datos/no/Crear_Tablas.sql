create database if not exists tpFinal;

drop schema tpFinal;

use tpFinal;

create table if not exists rol
    (codigo_rol int primary key,
     descripcion varchar(30)
);

create table if not exists usuario
    (id_usuario int primary key,
     usuario varchar(30),
     nombre varchar(30),
     contraseña varchar (30),
     codigo_rol int,
     constraint codigo_rol_fk foreign key (codigo_rol) references rol (codigo_rol)
);

create table if not exists modelo
	(id_modelo int primary key,
     descripcion varchar (30)
);

create table if not exists alarma 
	(id_alarma int primary key,
     tiene varchar (30)
);

create table if not exists acoplado 
	(id_acoplado int primary key,
	 descripcion varchar (30),
     capacidad_peso int
);

create table if not exists vehiculo
    (id_vehiculo int primary key,
     reportes varchar(30),
     estado varchar(30),
     KM_unidad int,
     combustible int,
     id_modelo int,
     id_alarma int,
     id_acoplado int,
     constraint id_modelo_fk foreign key (id_modelo) references modelo (id_modelo),
     constraint id_alarma_fk foreign key (id_alarma) references alarma (id_alarma),
	 constraint id_acoplado_fk foreign key (id_acoplado) references acoplado (id_acoplado)
);

create table if not exists carga 
	(id_carga int primary key,
     descripcion varchar (30),
     peso int
);

create table if not exists viaje 
	(id_viaje int unique,
     id_usuario int unique, 
     id_vehiculo int unique, 
	 constraint viaje_pk primary key (id_viaje,id_usuario,id_vehiculo),
     origen varchar (30),
     km_recorridos int,
     combustible_consumido int, 
     personal varchar (30),
     destino varchar (30),
     cliente varchar (30),
     fecha date,
     tiempo int,
     id_carga int,
     constraint id_carga_fk foreign key (id_carga) references carga (id_carga)
);

create table if not exists mecanico 
	(id_mecanico int primary key,
     nombre_y_apellido varchar (30)
);

create table if not exists interno 
	(id_mecanico int unique,
     constraint id_mecanico_fk foreign key (id_mecanico) references mecanico (id_mecanico)
);

create table if not exists externo  
	(id_mecanico int unique,
     constraint id_mecanico2_fk foreign key (id_mecanico) references mecanico (id_mecanico),
     empresa varchar (30)
);

create table if not exists reparacion 
	(codigo_reparacion int unique,
     id_mecanico int unique, 
     id_vehiculo int unique,
     constraint reparacion_pk primary key (codigo_reparacion, id_mecanico, id_vehiculo),
     costo int, 
     fecha date, 
     repuestos varchar (30)
);















     






































