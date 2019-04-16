-- # Renombrar una tabla 
ALTER TABLE usuarios RENAME TO usuarios_renom;

-- # cambiar nombre de una columna
-- ALTER TABLE nombre_tabla CHANGE nombre_antiguo nombre_nuevo +tipo de datos null etc...
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

-- # Modificar columna sin cambiar el nombre
ALTER TABLE usuarios MODIFY apellidos varchar(50) not null;

-- # Añadir columna
ALTER TABLE usuarios ADD website varchar(100) not null;

-- # Añadir restriccion a columna uq = unique
ALTER TABLE usuarios ADD CONSTRAINT uq_email UNIQUE(email);

-- # Borrar una columna
ALTER TABLE usuarios DROP website;