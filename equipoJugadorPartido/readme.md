# -- Creación y uso de Partido --

## 1 - Creación de la tabla 

partido(id_partido (PK), local (FK), visitante(FK), goles_local, goles_visitante, fecha)

## 2 - Escribe una entidad para la tabla partido incluyendo las relaciones.

./vendor/bin/doctrine orm:convert-mapping --from-database annotation src/entity --filter Partido

## 3 - Escribe un programa para probarla.



## 4 - Modifica Equipo para que la relación con Partido sea bidireccional (PartidoBidireccional) y escribe un programa para probarla.


## 5 - Añade un repositorio con 3 consultas que inventes (por ejemplo, que devuelva todos los partidos en los que el equipo x jugó como visitante). Escribe un programa para probarlas (probar-partido.php).