create database if not exists tpFinal;

/*drop schema tpFinal;*/

use tpFinal;

create table if not exists rol
    (codigo_rol int primary key,
     descripcion varchar(30)
);

create table if not exists licencia
(id_licencia varchar(10) primary key,
 descripcion varchar (50)
 );
 
 create table if not exists tipo_doc
 (id_tipo_doc int primary key,
  descripcion varchar(30)
  );
 

create table if not exists usuario
    (id_usuario int primary key,
     usuario varchar(30),
     nombre varchar(30),
     pass varchar (30),
     codigo_rol int,
     id_licencia varchar(10),
     fecha_nacimiento date,
     id_tipo_doc int,
     num_doc varchar (40), 
     constraint id_tipo_doc foreign key (id_tipo_doc) references tipo_doc(id_tipo_doc),
     constraint codigo_rol_fk foreign key (codigo_rol) references rol (codigo_rol),
     constraint id_licencia_fk foreign key (id_licencia) references licencia (id_licencia)
);

create table if not exists modelo
	(id_modelo int primary key,
     descripcion varchar (30)
);

create table if not exists marca
(id_marca int primary key,
 descripcion varchar(30)
 );



create table if not exists acoplado 
	(id_acoplado int primary key,
	 descripcion varchar (30),
     capacidad_peso int
);

create table if not exists estado
(id_estado varchar(2) primary key,
	descripcion varchar(20));
    
create table if not exists vehiculo
(id_vehiculo int primary key,
 id_modelo int,
 id_marca int,
 combustible_capacidad float,
 capacidad_carga float,
 constraint id_modelo_fk foreign key (id_modelo) references modelo (id_modelo),
 constraint id_marca_fk foreign key (id_marca) references marca (id_marca)
 );
 

create table if not exists transporte
    (id_transporte int primary key,
     id_vehiculo int,
     reportes varchar(30),
     id_estado varchar(2),
     KM_unidad int,
     combustible_km float,
     combustible_actual float,
     num_chasis int,
     num_motor int,
     año_fabricacion int,
     id_acoplado int,
     constraint id_vehiculo_fk foreign key(id_vehiculo) references vehiculo (id_vehiculo),
     constraint id_estado_fk foreign key (id_estado) references estado (id_estado),
	 constraint id_acoplado_fk foreign key (id_acoplado) references acoplado (id_acoplado)
);

create table if not exists carga 
	(id_carga int primary key,
     descripcion varchar (30),
     peso float
);

create table if not exists viaje 
	(id_viaje int unique,
     id_usuario int unique, 
     id_transporte int unique, 
     origen varchar (30),
     km_recorridos int,
     combustible_consumido int, 
     destino varchar (30),
     cliente varchar (30),
     fecha date,
     tiempo int,
     id_carga int,
	 constraint viaje_pk primary key (id_viaje,id_usuario,id_transporte,id_carga),
     constraint id_carga_fk foreign key (id_carga) references carga (id_carga),
     constraint id_usuario_fk foreign key (id_usuario) references usuario (id_usuario),
     constraint id_transporte_fk foreign key (id_transporte) references transporte (id_transporte)
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
     id_transporte int unique,
     costo int, 
     fecha date, 
     repuestos varchar (30),
	constraint reparacion_pk primary key (codigo_reparacion, id_mecanico, id_transporte),
    constraint id_mecanico3_fk foreign key (id_mecanico) references mecanico (id_mecanico),
    constraint id_transporte2_fk foreign key (id_transporte) references transporte (id_transporte)
    
);















     






































