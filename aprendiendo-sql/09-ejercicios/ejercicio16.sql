-- 16. Obtener un listado de clientes atendidos por el vendedor David López

select * from clientes where vendedor_id IN (select id from vendedores where nombre = 'David' and apellidos = 'López');

-- Se utiliza el operador in por si la subconsulta va a devolver más de un resultado
-- ya que ese nombre es común, si solo se espera un resultado con el = bastaría

