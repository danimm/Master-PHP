-- Consultas de agrupamiento

SELECT titulo from entradas GROUP BY categoria_id;

SELECT COUNT(titulo) AS 'Número de entradas', categoria_id FROM entradas GROUP BY categoria_id;

-- Condiciones dentro de una consulta de agrupamiento, se usa HAVING en vez de WHERE pero es igual

SELECT COUNT(titulo) AS 'Número de entradas', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 4;

-- Funciones para consultas de agrupamiento

/*

AVG     Sacar la media
COUNT   Contar el numero de elementos
MAX     Valor maximo del grupo
MIN     Valor minimo del grupo
SUM     Sumar todo el contenido del grupo

*/

SELECT ROUND(AVG(id), 2) AS 'Media de entrdas' FROM entradas;
SELECT MAX(id) AS 'Máximo id', titulo FROM entradas;
SELECT SUM(id) AS 'Suma de id', titulo FROM entradas;