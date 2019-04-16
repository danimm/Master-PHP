/* Consulta multitabla

Son consultas que sirven para consultar varias tablas en una sola sentencia

*/

-- Mostrar las entradas con el nombre del usuario del autor y el nombre de la categoria
select e.id, e.titulo, u.nombre as 'Autor', c.nombre as 'Categoría de la entrada'
  from entradas e, usuarios u, categorias c
  where e.usuario_id = u.id and e.categoria_id = c.id;
  -- alias para las tablas: table_name + "alias"

-- INNER JOIN
select e.id, e.titulo, u.nombre as 'Autor', c.nombre as 'Categoría de la entrada'
  from entradas e
  INNER JOIN usuarios u ON e.usuario_id = u.id
  INNER JOIN categorias c ON e.categoria_id = c.id order by c.nombre;

-- Mostrar el nombre de las categorias y al lado cuantas entradas tienen
select c.nombre, count(e.id) as 'Número de entradas' from categorias c, entradas e 
  where e.categoria_id = c.id group by e.categoria_id;

-- LEFT JOIN
select c.nombre, count(e.id) as 'Número de entradas' from categorias c
  left join entradas e ON e.categoria_id = c.id
  group by c.id;

-- RIGHT JOIN
select c.nombre, count(e.id) as 'Número de entradas' from entradas e
  right join categorias c ON e.categoria_id = c.id
  group by c.id;

-- Mostrar el email de los usuarios y al lado cuantas entradas tienen
select u.email, count(e.id) as 'Número de entradas' from usuarios u, entradas e
  where e.usuario_id = u.id group by e.usuario_id;

