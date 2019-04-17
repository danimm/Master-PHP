-- 23. Listar todos los encargos realizados con la marca del coche y el nombre del cliente

select en.id, cl.nombre as 'Nombre cliente', co.marca from encargos en 
inner join clientes cl on cl.id = en.cliente_id
inner join coches co on co.id = en.coche_id;