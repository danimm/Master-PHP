-- 27. Visualizar los nombres de los clientes y la cantidad de encargos realizados
-- incluyendo los que no hayan realizado encargos.

select cl.id, cl.nombre, count(en.id) from clientes cl
left join encargos en on en.cliente_id = cl.id
group by cl.id;