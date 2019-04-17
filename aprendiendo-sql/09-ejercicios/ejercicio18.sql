-- 18. Listar los clientes que han hecho algún encargo del coche skoda Karoq

select en.id, cl.nombre, co.marca, co.modelo, en.cantidad from encargos en 
inner join coches co on co.id = en.coche_id
inner join clientes cl on cl.id = en.cliente_id
where co.id in (select id from coches where marca = 'Skoda' and modelo = 'Karoq');

select * from clientes where id in 
(select cliente_id from encargos where coche_id
in (select id from coches where modelo like '%Karoq%'));