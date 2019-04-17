-- 30. Mostrar los datos del vendedor con más antiguedad en el concesionario

select * from vendedores order by fecha_alta asc limit 1;

-- 30 plus: Obtener los datos de los coches con mñas unidades vendidas

select * from coches where id in
(select coche_id from encargos where cantidad in
(select max(cantidad) from encargos));

select * from coches where id in
(select coche_id from encargos order by cantidad asc) limit 3;

-- las unidades más vendidas a partir de 2
select c.*, sum(e.cantidad) from coches c
inner join encargos e on c.id = e.coche_id
group by e.coche_id
having sum(e.cantidad) >= 2;

--  los 3 que mñas se venden
select c.id, c.modelo, sum(e.cantidad) as 'Unidades vendidas' from coches c
inner join encargos e on e.coche_id = c.id
group by c.id order by 2 desc limit 3;