/*

Vistas:
  - Las podemos definir como una consulta almacenada en la base de datos
    que se utiliza como una tabla virtual
    No almacena datos sino que utiliza asociaciones y los datos originales de las tablas
    de forma que siempre se mantiene actualizada


*/

CREATE VIEW entradas_con_nombres as 
select e.id, e.titulo, u.nombre as 'Autor', c.nombre as 'Categoría de la entrada'
  from entradas e
  INNER JOIN usuarios u ON e.usuario_id = u.id
  INNER JOIN categorias c ON e.categoria_id = c.id order by c.nombre;

