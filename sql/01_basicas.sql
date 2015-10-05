#Abiri linea de comandos de mySql
# ----------------------------------------
#cd c:/xampp/mysql/bin/mysql.exe
# mysql -u root

#crear base da datos
# ---------------------------------------
# create database nombredb

#Seleccionar una base de datos
# ----------------------------------------
# use nombredb

#Crear tabla
# ----------------------------------------
# create table personas (
#   id int auto_increment,
#   nombre varchar(20),
#   apellido varchar(20),
#   telefono int(12),
#   ciudad varchar(20),
#   primary key(id)
# );

# Mostrar tablas
# =============================

# show tables;


# Estructura de una tabla
# =============================

# describe nombretable;


# Insertar registros
# =============================

# insert into personas values (default, 'jeremias', 'springfield', 3110003111, 'springfield');
# insert into personas values (default, 'homero', 'simpson', 3110003111, 'springfield');
# insert into personas values (default, 'march', 'simpson', 3110003111, 'springfield');
# insert into personas values (default, 'liza', 'simpson', 3110003111, 'springfield');
# insert into personas values (default, 'barth', 'simpson', 3110003111, 'springfield');
