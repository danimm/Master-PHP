-- 5. Listar todos los vendedores con su nombre y el numero de dias que llevan
-- en el concesionario

select nombre, datediff(curdate(), fecha_alta) as 'Días en la empresa' from vendedores;