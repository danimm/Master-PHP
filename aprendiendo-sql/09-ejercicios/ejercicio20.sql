-- 20. Seleccionar el grupo en el que trabaja el vendedor con mayor sueldo
-- y mostrar el nombre del grupo.

select * from grupos where id in 
(select grupo_id from vendedores where sueldo = 
(select max(sueldo) from vendedores));