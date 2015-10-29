create database if not exists tpFinal;

drop schema tpFinal;

use tpFinal;

 /* USUARIOS*/
create table if not exists licencia
(id_licencia varchar(10) primary key,
 descripcion varchar (50)
 );
 
 create table if not exists tipo_doc
 (id_tipo_doc int primary key,
  descripcion varchar(30)
  );
  
  create table if not exists rol
    (codigo_rol int primary key,
     descripcion varchar(30)
);

  create table if not exists permiso
    (id_permiso int primary key,
     codigo_rol int,
     descripcion varchar(30),
     CONSTRAINT id_permiso_rol FOREIGN KEY (codigo_rol) REFERENCES rol (codigo_rol)
);

 CREATE TABLE IF NOT EXISTS usuario (
    id_usuario varchar(30) PRIMARY KEY,
    usuario VARCHAR(30),
    nombre VARCHAR(30),
    pass varchar(30),
    fecha_nacimiento DATE,
    id_tipo_doc INT,
    num_doc VARCHAR(40),
    id_licencia VARCHAR(10),
	codigo_rol int,
    CONSTRAINT id_tipo_doc FOREIGN KEY (id_tipo_doc) REFERENCES tipo_doc (id_tipo_doc),
    CONSTRAINT id_licencia_usuario FOREIGN KEY (id_licencia) REFERENCES licencia (id_licencia),
    CONSTRAINT id_rol_usuario FOREIGN KEY (codigo_rol) REFERENCES rol (codigo_rol)
    
);


 CREATE TABLE IF NOT EXISTS cliente (
    id_cliente varchar(30) primary key,
    usuario VARCHAR(30),
    pass varchar(30),
	codigo_rol int,
    CONSTRAINT id_rol_cliente FOREIGN KEY (codigo_rol) REFERENCES rol (codigo_rol)
    
);
 /**************/


  
   /**MECANICOS****/ 
 create table if not exists mecanico
 (id_mecanico int primary key,
  nombre varchar(30)
 );
 
 create table if not exists mecanico_interno
 (id_mecanico int unique,
  constraint id_mec_int foreign key (id_mecanico) references mecanico(id_mecanico)
 );
 
 create table if not exists mecanico_externo
 (id_mecanico int unique,
  empresa varchar(30),
  constraint id_mec_ext foreign key (id_mecanico) references mecanico(id_mecanico)
 );
 /**************/
 
 /**TRANSPORTE**/
 create table if not exists modelo
	(id_modelo int primary key,
     descripcion varchar (30)
);

create table if not exists marca
(id_marca int primary key,
 descripcion varchar(30)
 );

create table if not exists estado
(id_estado varchar(2) primary key,
	descripcion varchar(20));

create table if not exists vehiculo
(id_vehiculo int primary key,
 id_modelo int,
 id_marca int,
 capacidad_carga float,
 constraint id_modelo_fk foreign key (id_modelo) references modelo (id_modelo),
 constraint id_marca_fk foreign key (id_marca) references marca (id_marca)
 );
 
 create table if not exists transporte
    (id_transporte int primary key,
     id_vehiculo int,
     id_estado varchar(2),
     num_chasis int,
     num_motor int,
     año_fabricacion int,
     patente varchar(30) unique,
     constraint id_vehiculo_fk foreign key(id_vehiculo) references vehiculo (id_vehiculo),
     constraint id_estado_fk foreign key (id_estado) references estado (id_estado)
);


create table if not exists acoplado 
	(id_acoplado int primary key,
	 descripcion varchar (30)

);


 

/***************/

/*VIAJE*/



create table if not exists viaje 
	(id_viaje int primary key,
     id_usuario varchar (30), 
     id_transporte int,
     origen varchar (30),
     km_recorridos int,
     destino varchar (30),
     id_cliente varchar(30),
     fecha_inicio datetime,
     fecha_fin datetime,
     carga varchar(30),
     constraint id_clientes_viaje foreign key (id_cliente) references cliente (id_cliente),
     constraint id_usuario_viaje foreign key (id_usuario) references usuario (id_usuario),
     constraint id_transporte_fk foreign key (id_transporte) references transporte (id_transporte)
	
);

create table if not exists vale_combustible
	(id_vc int primary key,
     id_viaje int,
     fecha_hora datetime,
	 lugar varchar (30),
     costo double,
     cantidad double,
  constraint id_viaje_vc foreign key (id_viaje) references viaje (id_viaje)
	
);

create table if not exists lleva
(id_acoplado int,
 id_transporte int,
 id_viaje int,
 constraint lleva_pk primary key (id_viaje,id_transporte,id_acoplado),
 constraint id_viaje_lleva foreign key (id_viaje) references viaje (id_viaje),
 constraint id_acoplado_lleva foreign key (id_acoplado) references acoplado (id_acoplado),
 constraint id_transporte_lleva foreign key (id_transporte) references transporte (id_transporte)
 );

/**********************/

/*REPARACION*/

create table if not exists repuesto
	(id_repuesto int primary key,
     descripcion varchar(20),
     costo double
    
);


create table if not exists orden
	(id_orden int primary key,
    id_repuesto int,
    cantidad int,
    constraint id_repuesto_orden foreign key (id_repuesto) references repuesto (id_repuesto)
    
);


create table if not exists reparacion 
	(codigo_reparacion int unique,
     id_mecanico int, 
     id_transporte int,
     id_orden int,
     costo int, 
     fecha date, 
	constraint reparacion_pk primary key (codigo_reparacion, id_mecanico, id_orden),
    constraint id_usuario_mecanico_reparacion foreign key (id_mecanico) references mecanico (id_mecanico),
    constraint id_transporte_reparacion foreign key (id_transporte) references transporte (id_transporte),
    constraint id_orden_reparacion foreign key (id_orden) references orden (id_orden)
    
);
