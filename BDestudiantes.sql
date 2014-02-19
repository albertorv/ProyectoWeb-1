create database estudiantes;

CREATE TABLE `estudiante` (
  `idestudiante` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `correo` varchar (50) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idestudiante`)
)

select *from estudiante;

INSERT INTO estudiante VALUES (1,'Kabul','Alvarado','61115264','Ciudad Quesada');
INSERT INTO estudiante VALUES (2,'Carlos','Villalobos','87815234','Alajuela');
INSERT INTO estudiante VALUES (3,'Kabul','Alvarado','87905423','Escazú');
INSERT INTO estudiante VALUES (4,'Yahaira','Cardenas','86542901','Quepos');
