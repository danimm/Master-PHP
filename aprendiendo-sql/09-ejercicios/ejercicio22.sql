-- 22. Obtener un listado de clientes (numero de cliente y el nombre)
-- mostrar el numero de vendedor y su nombre

select c.id, c.nombre, v.id, concat(v.nombre, ' ', v.apellidos) from clientes c
inner join vendedores v on v.id = c.vendedor_id;

select c.id, c.nombre, v.id, concat(v.nombre, ' ', v.apellidos) as 'Vendedor'
from clientes c, vendedores v where c.vendedor_id = v.id;