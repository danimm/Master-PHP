-- 26. Vendedores que tienen jefes y sacar el nombre del jefe

select id, nombre, nombre as 'Jefe' from vendedores where id in 
(select jefe from vendedores where jefe > 0);

select concat(v1.nombre, ' ', v1.apellidos) as 'Vendedor', 
concat(v2.nombre, ' ', v2.apellidos) as 'jefe' from vendedores v1
inner join vendedores v2 on v1.jefe = v2.id;