-- 21. Obtener los nombres y las ciudades de los clientes que tengan encargos de 3 unidades o más

select nombre, ciudad from clientes where id in 
(select cliente_id from encargos where cantidad >= 3);