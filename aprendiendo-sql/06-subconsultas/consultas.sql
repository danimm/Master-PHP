/* 

  Subconsultas:

- Son consultas que se ejecutan dentro de otras.
- Consiste en utilizar los resultados de la subconsulta para operar en la consulta principal.
- Jugando con las claves ajenas (foreign keys)

*/

INSERT INTO usuarios VALUES(null, 'Admin', 'Admin', 'admin@admin.com', 'admin' CURDATE());

-- Saca los datos de los usuarios que tienen entradas creadas, el id existe en usuario_id en entradas

SELECT * from usuarios WHERE id IN (SELECT usuario_id FROM entradas);

-- Los que no tienen entradas
SELECT * from usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

-- Sacar los usuarios que tengan alguna entradas que en su titulo hable de GTA
select id, nombre, apellidos from usuarios where id in 
  (select usuario_id from entradas where titulo like "%GTA%");

-- Sacar todas las entradas de la categoria accion utilizando su nombre
select categoria_id, titulo from entradas where categoria_id in (select id from categorias where nombre = 'accion');

-- Mostrar las categorías con más de 3 entradas
select categoria_id from entradas where (select categoria_id from entradas group by categoria_id) having count(categoria_id) >=3;
-- profe
select * from categorias where id in (select categoria_id from entradas group by categoria_id having count(categoria_id)>=3);

-- Mostrar los usuarios que crearon una entrada un lunes
select * from usuarios where id in 
  (select usuario_id from entradas where dayofweek(fecha) = 2);

-- Mostrar el nombre de el usuario que tenga más entradas
select * from usuarios where id = 
  (select usuario_id from entradas group by usuario_id order by count(id) desc limit 1);
-- modo pro
select concat(nombre, ' ', apellidos) as 'El usuario con más entradas' from usuarios where id = 
  (select usuario_id from entradas group by usuario_id order by count(id) desc limit 1);

-- descomponiendo la consulta: lista de usuarios con sus entradas
select usuario_id, count(id) from entradas group by usuario_id order by count(id) desc;

-- Mostrar las categorías sin entradas
select * from categorias where id not in
  (select categoria_id from entradas);