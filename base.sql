CREATE DATABASE "ECOLang"
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'es_ES.UTF-8'
       LC_CTYPE = 'es_ES.UTF-8'
       CONNECTION LIMIT = -1;

CREATE TABLE "usuarios"(
	idusuario serial,
	nombre varchar(15),
	correo varchar(120),
	contrasena varchar(20),
	rol integer,
	CONSTRAINT idusuario PRIMARY KEY (idusuario)
)

CREATE TABLE "ejercicios"(
	idejercicio serial,
	nombre varchar(120),
	tema varchar(60),
	calificacion integer,
	comentarios varchar(300),
	CONSTRAINT idejercicio PRIMARY KEY (idejercicio)
)