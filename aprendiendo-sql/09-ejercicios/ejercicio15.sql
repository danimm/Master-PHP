-- 15. Mostrar los clientes que más pedidos han hecho y mostrar cuantos hicieron.

select cl.id, cl.nombre, e.cantidad, co.marca, co.modelo from clientes cl
inner join encargos e on e.id = cl.id
inner join coches co on co.id = e.coche_id
order by e.cantidad desc
limit 2;

-- Es cuantos pedidos ha echo, no cuanta cantidad de coches a comprado
-- 2 pedidos de 1 coche, no 1 pedido de 4 coches
select c.nombre, count(c.id) as 'numero de pedidos' from encargos e
inner join clientes c on c.id = e.cliente_id
 group by e.cliente_id order by 2 desc limit 2;