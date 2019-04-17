-- 28. Mostrar todos los vendedores y el numero de clientes.
-- se deben mostrar tengan o no clientes

select v.nombre as 'Nombre vendedor', count(cl.id) as 'Número de clientes' from vendedores v
left join clientes cl on cl.vendedor_id = v.id
group by v.id;

select v.nombre, v.apellidos, count(cl.id) as 'numero de clientes' from vendedores v
left join clientes cl on cl.vendedor_id = v.id
group by v.id;