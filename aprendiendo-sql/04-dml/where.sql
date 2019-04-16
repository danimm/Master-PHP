-- Consulta con una condición

SELECT * FROM usuarios WHERE email = 'daniel@daniel.com';

/* Operadores de comparación:

Igual           =
Distinto        !=
Menor           <
Mayor           >
Menor o igual   <=
Mayor o igual   >=
Entre           between A and B
En              in
Es nulo         is null
No es nulo      is not null
Como            like
No es como      not like

*/

/* Operadores lógicos 

O     OR
Y     AND
NO    NOT

*/

/* Comodines

Cualquier cantidad de caracteres: %
Un caracter desconocido: _

*/

-- Mostrar nombre y apellidos de todos los usuarios registrador en 2019

SELECT nombre, apellidos, fecha FROM usuarios WHERE YEAR(fecha) = 2019;

-- Mostrar nombre y apellidos de todos los usuarios que No se registraron en 2019

SELECT nombre, apellidos, fecha FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);

-- Mostrar el email de los usuarios en cuyo apellido contenga la letra "a", y la contraseña sea 1234

SELECT * FROM usuarios WHERE apellidos LIKE '%a%' AND password = '1234';

-- Sacar todos los registros de la tabla usuaruios cuyo añp sea PAR

SELECT * from usuarios WHERE (YEAR(fecha)%2 = 0);

-- Sacar todos los registros de la tabla usuarios cuyo nombre tenga más de 5 letras y que se hayan registrado antes de 2020
-- y mostrar nombre en mayusculas

SELECT id, UPPER(nombre) AS 'Nombre', apellidos, fecha FROM usuarios WHERE (LENGTH(nombre) > 5) AND YEAR(fecha) < 2020;

-- LIMIT y ORDER BY

SELECT * from usuarios ORDER BY id DESC;

-- Saca uno solo
SELECT * FROM usuarios LIMIT 1;

-- Saca del 0 al 3
SELECT * FROM usuarios LIMIT 0, 3;