-- 7. Mostrar el nombre y el salario de los vendedores con cargo de ayudante

select nombre, cargo, sueldo from vendedores where cargo like '%ayudante%';