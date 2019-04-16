/*

1. Diseñar y crear la base de datos de una concesionario.

a la hora de crear las tablas de la base de datos es importante el orden:

1. Primero crear las tablas que no dependen de otras, es decir que no apuntan a otra tabla.
2. Ir siguiendo con un orden progresivo

*/

create database if not exist concesionario;
use concesionario;

-- tabla de coches
create table coches(
  id        int(10) auto_increment not null,
  modelo    varchar(100) not null,
  marca     varchar(50),
  precio    int(20) not null,
  stock     int(255) not null,
  constraint pk_coches primary key(id)
)ENGINE=InnoDB;

-- tabla de grupos
create table grupos(
  id        int(10) auto_increment not null,
  nombre    varchar(100) not null,
  ciudad    varchar(100),
  constraint pk_grupos primary key(id)
)ENGINE=InnoDB;

-- tabla de vendedores
create table vendedores(
  id          int(10) auto_increment not null,
  grupo_id    int(10) not null,
  jefe        int(10),
  nombre      varchar(100) not null,
  apellidos   varchar(150),
  cargo       varchar(50),
  fecha_alta  date,
  sueldo      float(20,2),
  comision    float(10, 2),
  constraint pk_vendedores primary key(id),
  constraint fk_vendedor_grupo foreign key(grupo_id) references grupos(id),
  constraint fk_vendedor_jefe foreign key(jefe) references vendedores(id)
);
  -- hace referencia a si mismo es como una flecha al campo id

-- tabla de clientes
create table clientes(
  id            int(10) auto_increment not null,
  vendedor_id   int(10),
  nombre        varchar(150) not null,
  ciudad        varchar(100),
  gastado       float(50, 2),
  fecha         date,
  constraint pk_clientes primary key(id),
  constraint fk_cliente_vendedor foreign key(vendedor_id) references vendedores(id)
)ENGINE=InnoDB;

-- encargos
create table encargos(
  id            int(10) auto_increment not null,
  cliente_id    int(10) not null,
  coche_id      int(10) not null,
  cantidad      int(100),
  fecha         date,
  constraint pk_encargos primary key(id),
  constraint fk_encargo_cliente foreign key(cliente_id) references clientes(id),
  constraint fk_encargo_coche foreign key(coche_id) references coches(id)
)ENGINE=InnoDB;

-- 2. Rellenar la base de datos con firmación - inserts

-- Coches
insert into coches values(null,"Clio","Renault",12000,13);
insert into coches values(null,"Panda","Seat",10000,10);
insert into coches values(null,"GLA","Mercedes-Benz",45000,4);
insert into coches values(null,"Aventador","Lamborgini",150000,2);
insert into coches values(null,"R8","Audi",90000,5);
insert into coches values(null,"Karoq","Skoda",38000,15);
insert into coches values(null,"Tiguan","Volkswagen",40000,20);
insert into coches values(null,"Mégane","Renault",30000,30);
insert into coches values(null,"Corolla","Toyota",35000,21);


-- Grupos
insert into grupos values(null, "Vendedores A", "Madrid");
insert into grupos values(null, "Vendedores B", "Valencia");
insert into grupos values(null, "Comité de Mecánicos", "Antequera");
insert into grupos values(null, "Grupo AMAG", "Málaga");
insert into grupos values(null, "Asociación del Motor", "Lugo");
insert into grupos values(null, "Clásicos de época", "Paterna");


-- Vendedores
insert into vendedores values(null, 1, null, 'David', 'López', 'Responsable de tienda', curdate(), 30000, 4);
insert into vendedores values(null, 3, null, 'Diego', 'Aguado', 'Jefe de Mecánicos', curdate(), 30000, 4);
insert into vendedores values(null, 4, null, 'Daniel', 'Muñoz', 'Jefe de Tecnología', curdate(), 30000, 12);
insert into vendedores values(null, 6, null, 'Aurelio', 'Gañán', 'Propietario', curdate(), 50000, 18);
insert into vendedores values(null, 2, null, 'Víctor', 'Robles', 'Encargado de limpieza', curdate(), 18000, 0);
insert into vendedores values(null, 5, null, 'Heinz', 'Grey', 'Director General', curdate(), 80000, 20);
insert into vendedores values(null, 2, 5, 'Antonio', 'Roldán', 'Ayudante de limpieza', curdate(), 14000, 0);
insert into vendedores values(null, 1, 1, 'Paquito', 'Naranjo', 'Ayudante en tienda', curdate(), 22000, 2);
insert into vendedores values(null, 3, 2, 'Rubén', 'Benitez', 'Mecánico', curdate(), 25000, 2);
insert into vendedores values(null, 3, 2, 'Pablo', 'González', 'Ayudante de mecánica', curdate(), 10000, 1);
insert into vendedores values(null, 4, 3, 'Patricia', 'Román', 'Responsable del área comercial', curdate(), 30000, 14);


-- Clientes
insert into clientes values(null, 1, 'Construcciones Diaz Inc', "Alcobendas", 20000, curdate());
insert into clientes values(null, 1, 'Frutería Antonia', "Fuenlabrada", 90000, curdate());
insert into clientes values(null, 1, 'Imprenta martínez', "Barcelona", 150000, curdate());
insert into clientes values(null, 1, 'Jesús colchones', "Valencia", 105000, curdate());
insert into clientes values(null, 1, 'Tienda PC Inc', "Murcia", 160000, curdate());
insert into clientes values(null, 1, 'Danimm', "Málaga", 76000, curdate());


-- Encargos
insert into encargos values(null, 1, 10, 2, curdate());
insert into encargos values(null, 3, 4, 1, curdate());
insert into encargos values(null, 5, 7, 4, curdate());
insert into encargos values(null, 2, 5, 1, curdate());
insert into encargos values(null, 4, 9, 3, curdate());
insert into encargos values(null, 6, 6, 2, curdate());

