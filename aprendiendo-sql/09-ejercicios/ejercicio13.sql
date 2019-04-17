-- 13. Sacar la media sueldos entre todos los vendedores por grupo.

select v.grupo_id, g.nombre, g.ciudad, ceil(avg(v.sueldo)) as 'Media de sueldo' from vendedores v
INNER JOIN grupos g on g.id = v.grupo_id
group by grupo_id;