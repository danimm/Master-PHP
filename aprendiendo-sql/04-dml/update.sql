-- Modificar filar / actualizar datos
-- Siempre poner un where si no actualizará todos los registros de la tabla

UPDATE usuarios SET apellidos='Admin', fecha=CURDATE() WHERE id=5;