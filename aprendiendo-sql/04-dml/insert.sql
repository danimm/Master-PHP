#Insertar nuevos registros#

INSERT INTO usuarios VALUES(
  null,
  'Daniel',
  'Apellidos',
  'daniel@daniel.com',
  '1234',
  '2019-05-05'
);

#Insertar filas solo con ciertas columnas,
tener en cuenta las restricciones de la tabla, campos nulos, etc
#

INSERT INTO usuarios(email, password) VALUES('hola@hola.com', '12345');