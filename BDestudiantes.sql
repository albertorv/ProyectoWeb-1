create database estudiantes;

CREATE TABLE estudiante (
  `idestudiante` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `correo` varchar (50) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idestudiante`)
)

select *from estudiante;

INSERT INTO estudiante VALUES (0001,'Steven','Alvarado Castro','206340231','steven.a@gmail.com','87653409');
INSERT INTO estudiante VALUES (0002,'Carlos','Villalobos Gutiérrez','207210543','villalobos.cg@gmail.com','61239853');
INSERT INTO estudiante VALUES (0003,'Fabiana','Pérez Arroyo','207200432','fabi12.p@gmail.com','71902453');
INSERT INTO estudiante VALUES (0004,'Yahaira','Cardenas Castillo','207430938','yahaira_carca1@gmail.com','85674312');
