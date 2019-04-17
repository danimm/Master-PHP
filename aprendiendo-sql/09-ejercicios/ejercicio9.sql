-- 9. Mostrar todos los vendedores del grupo numero 2, ordenados por sueldo
-- de mayor a menor

select * from vendedores where grupo_id = 2 order by sueldo desc;