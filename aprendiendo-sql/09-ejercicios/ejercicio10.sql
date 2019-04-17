-- 10. Visualizar los apellidos de los vendedores, su fecha y su numero de grupo
-- ordenado por fecha descendente y mostrar solo los 4 ultimos.

select apellidos, fecha_alta, id from vendedores order by fecha_alta desc limit 4;

select id, apellidos, fecha_alta, grupo_id from vendedores order by fecha_alta desc, id desc limit 4;