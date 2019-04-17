-- 17. Obtener un listado con los encargos realizados por el cliente 'fruteria antonia'

select en.id as 'Número encargo', en.cantidad, c.nombre, co.modelo, en.fecha from encargos en
inner join clientes c on c.id = en.cliente_id
inner join coches co on co.id = en.coche_id
 where en.cliente_id in (select id from clientes where nombre = 'Fruteria Antonia');