-- 14. Visualizar las unidades totales vendidas de cada coche a cada cliente
-- mostrando el nombre del producto, el numero del cliente, y la suma de unidades

select co.modelo, cl.nombre, sum(e.cantidad) from encargos e
inner join coches co on co.id = e.coche_id
inner join clientes cl on cl.id = e.cliente_id
group by e.coche_id, e.cliente_id;