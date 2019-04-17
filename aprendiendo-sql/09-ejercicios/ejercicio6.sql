-- 6. Visualizar el nombre y los apellidos de los vendedores en una misma columna
-- y su fecha de registro y que día de la semana era cuando se registraron

select concat(nombre, ' ', apellidos) as 'Nombre completo', fecha_alta, dayname(fecha_alta) as 'Día de registro' from vendedores;