-- 29. Crear una vista llamada vendedoresA que incluirá todos los vendedores del grupo
-- que se llame "Vendedores A"


create view vendedoresA as
select * from vendedores where grupo_id in (
  select id from grupos where nombre = 'Vendedores A'
);

drop view vendedoresa;