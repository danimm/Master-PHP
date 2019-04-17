-- 8. Visualizar todos los coches en cuya marca exista la letra "A" y 
-- cuyo modelo empieze por "F"

select * from coches where marca like "%a%" and modelo like "f%";