# Alias
# ===================================================

SELECT a.name, a.price, p.id, p.firstname
FROM personas AS p, articles AS a
WHERE p.id = a.person_id;

SELECT u.id, u.nombres, n.nt1, n.nt2, n.nt3, m.nombre
FROM usuarios AS u, notas AS n, materias AS m
WHERE n.usuario_id = u.id
AND n.materia_id = m.id;
