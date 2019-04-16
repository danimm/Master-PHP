-- Crear tabla en SQL

/*
  Tipos de datos
  ----------
  int(nº caracteres)              Entero
  integer(caracteres)             Entero (max 4294967295)
  varchar(caracteres)             String / alfanumérico (max 256)
  float(nº cifras, nº decimales)  Decimal / Coma flotante 
  date, time, timestamp(hora en UTC)

  / String mas grandes
  text        655535 de caractéres
  mediumtext  16 millones de caractéres
  longtext    16 billones de carácteres

  / Enteros más grandes
  MediumINT
  BigInt

  Restricciones básicas

  not null = no puede ser nulo
  null =  puede ser nulo
  default 'hola que tal' = pone un valor por defecto
  auto_increment = auto incrementable


*/

CREATE TABLE usuarios(
  id        int(11) auto_increment not null,
  nombre    varchar(100) not null,
  apellidos varchar(255) default 'N/A',
  email     varchar(100) not null,
  password  varchar(255),
  CONSTRAINT pk_usuarios PRIMARY KEY(id)
);
  -- asignar clave primaria al id