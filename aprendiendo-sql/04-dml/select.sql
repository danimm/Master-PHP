-- Mostrar todos los registros / filas de una tabla
SELECT email, nombre, apellidos from usuarios;

-- Mostrar todos los campos
SELECT * FROM usuarios;

-- Operadores aritméticos as = nombre columna para la operacion
SELECT email, (7+7) AS 'OPERACION' FROM usuarios;

-- ORDER BY ASC o DESC
SELECT id, email, (id+7) AS 'OPERACION' FROM usuarios ORDER BY id DESC;

-- Funciones matemáticas

-- ABS valor absoluto de un número
-- CEIL redondeo hacia arriba
-- FLOOR redondeo hacia abajo
-- RAND número aleatorio
-- ROUND(numero, cuantos decimales) redondeo
-- SQRT raiz cuadrada
-- TRUNCATE(numero, numero de decimales que quiero tener) quitar decimales
SELECT ABS(7) AS 'OPERACION' FROM usuarios;

-- Funciones para carácteres

-- UPPER mayusculas
-- LOWER minusculas
-- CONCAT concatenar columnas
-- LENGTH sacar la longitud de la cadena de carácteres
-- TRIM limpiar los espacios de izquierda y de derecha de un texto
SELECT UPPER(nombre) from usuarios;
SELECT CONCAT(nombre, ' ', apellidos) AS 'Conversion' from usuarios;
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'Conversion' from usuarios;

-- Funciones para fechas

-- Current date: CURDATE
-- DATEDIFF: calcula la diferencia en dias que hay entre dos fechas
-- DAYNAME: nombre del dia
-- DAYOFMONTH : saca el día del mes que se registro el usuarios
-- DAYOFWEEK :  saca el día de la semana
-- DAYOFYEAR : saca el día del año que se añadió dicho registro
-- MONTH(fecha): saca el mes
-- YEAR(fecha): saca el año
-- DAY(fecha): saca el día
-- HOUR(fecha): saca la hora
-- CURTIME: hora actual ahora mismo
-- SYSTEMDATE: saca la hora del servidor
-- DATE_FORMAT(fecha, '%d-%m-%y'): devuelve la fecha en formato europeo


SELECT email, fecha, CURDATE() AS 'Fecha actual' FROM usuarios;
SELECT email, fecha, DATEDIFF(fecha, CURDATE()) AS 'Fecha actual' FROM usuarios;

-- Funciones generales

-- ISNULL() me devuelve true o false dependiendo del campo que le pase

SELECT email, ISNULL(apellidos) FROM usuarios;

-- Para ver si dos valores son diferentes

SELECT email, STRCMP('HOLA', 'HOLA1') FROM usuarios;

-- Version: saca la version de mysql que tengo
-- USER: saca el usuario que estamos utilizando para entrar a la base de datos
-- DISTINCT: saca sólamente un valor si todos son iguales
-- DATABASE: nombre de la base de datos
-- IFNULL(apellidos, 'Este campo esta vacío'): comprobar si un campo esta vacío me ponga un string

SELECT DISTINCT USER() FROM usuarios;

