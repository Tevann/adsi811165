# Seleccionar todo los registros (SELECT *)
# ===================================================

SELECT * FROM personas;


# Seleccionar valores distintos
# ===================================================

SELECT DISTINCT city FROM personas;


# Seleccionar registros con criterio (condición)
# ===================================================

SELECT * FROM personas WHERE city = 'shelbyville';


# Operador OR
# ===================================================

SELECT * FROM personas WHERE city = 'shelbyville' OR city = 'springfield';


# Operador AND
# ===================================================

SELECT * FROM personas WHERE city = 'springfield' AND firstname = 'homero';


# Operador OR - AND
# ===================================================

SELECT * FROM personas WHERE lastname = 'simpson' AND (firstname = 'homero' OR firstname = 'barth');


# Ordenar (ORDER BY)
# ===================================================

SELECT * FROM personas ORDER BY firstname;


# Ordenar Ascendente
# ===================================================

SELECT * FROM personas ORDER BY firstname ASC;


# Ordenar Descendente
# ===================================================

SELECT * FROM personas ORDER BY firstname DESC;


# Limite
# ===================================================

SELECT * FROM personas LIMIT 3;


# Limite e Inicio (LIMIT - OFFSET)
# ===================================================

SELECT * FROM personas LIMIT 3 OFFSET 3;


# Buscar (LIKE)
# ===================================================

SELECT * FROM personas WHERE lastname LIKE 'sim%';

SELECT * FROM personas WHERE lastname LIKE '$son%';

SELECT * FROM personas WHERE firstname LIKE '%om%';

SELECT * FROM personas WHERE firstname LIKE '_o_e_o';


# Multiples valores (IN)
# ===================================================

SELECT firstname FROM personas WHERE id IN (1,3,6);

SELECT firstname FROM personas WHERE city IN ('springfield', 'shelbyville');


# Rango de valores (BETWEEN)
# ===================================================

SELECT id, firstname FROM personas WHERE id BETWEEN 3 AND 5;


# Negacion Rango de valores (NOT BETWEEN)
# ===================================================

SELECT id, firstname FROM personas WHERE id NOT BETWEEN 3 AND 5;
