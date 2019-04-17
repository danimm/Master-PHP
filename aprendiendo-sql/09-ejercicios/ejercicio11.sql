-- 11. Visualizar todos los cargos y el numero de vendedores que hay en cada cargo.

select cargo, count(cargo) as 'Número de personas' from vendedores group by id;
select cargo, count(id) as 'Número de personas' from vendedores group by cargo;