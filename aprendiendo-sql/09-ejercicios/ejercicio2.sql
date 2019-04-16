/*

2. Modificar la comisión de los vendedores y ponerla al 2% cuando ganan más de 50000

*/
update vendedores set comision = 8 where sueldo > 30000 and sueldo <= 50000;