-- 25. Obtener una lista de los nombres de los clientes con el importe 
-- de sus encargos acumulado.

select cl.nombre, co.marca, co.modelo, co.precio, e.cantidad, sum(precio*cantidad) as 'Importe total' from clientes cl
inner join encargos e on e.cliente_id = cl.id
inner join coches co on co.id = e.coche_id
group by e.id
order by 6 desc;