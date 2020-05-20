/*DROP DATABASE IF EXISTS data;

CREATE DATABASE data;
USE data;
*/

CREATE TABLE cadet (
	cadetName CHARACTER VARYING(30) NOT NULL,
	classYear INTEGER(4) NOT NULL,
	squad INTEGER(2) NOT NULL,
	type BOOLEAN
);

INSERT INTO cadet (cadetName, classYear, squad, type) VALUES
('Doe', '2021', '05', TRUE),
('Doe', '2021', '05', TRUE),
('Doe', '2021', '05', TRUE),
('Doe', '2021', '05', TRUE),
('Doe', '2021', '05', TRUE),
('Coughman', '2024', '40', FALSE);


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


