/*DROP DATABASE IF EXISTS data;*/

CREATE DATABASE data;
USE data;


CREATE TABLE cadet (
	cadetName CHARACTER VARYING(30) NOT NULL,
	classYear INTEGER(4) NOT NULL,
	squad INTEGER(2) NOT NULL,
	goodType INTEGER(3),
	badType INTEGER(3),
  
	PRIMARY KEY (cadetName)

);
/*
CREATE TABLE form(
  cadetName CHARACTER VARYING(30) NOT NULL,
  type BOOLEAN, -- 0 for bad, 1 for good
  
  PRIMARY KEY(cadetName)
  FOREIGN KEY (cadetName) REFERENCES cadet (cadetName)
  	ON UPDATE CASCADE ON DELETE RESTRICT
  		/*
 	FOREIGN KEY (form10) REFERENCES form (type)
  		ON UPDATE CASCADE ON DELETE RESTRICT
  		/
);
*/
INSERT INTO cadet (cadetName, classYear, squad, goodType, badType) VALUES
('Doe', '2021', '01', '5', '0'),
('Coughman', '2024', '40', '0', '5');




