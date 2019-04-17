-- 24. Listar los encargos con el nombre del coche el nombre del cliente y el nombre de la ciudad, pero unicamente pero solo cuando sean de barcelona

select e.id, co.marca, co.modelo, cl.nombre, cl.ciudad from encargos e
inner join coches co on co.id = e.coche_id
inner join clientes cl on cl.id = e.cliente_id
where cl.ciudad = 'Barcelona';