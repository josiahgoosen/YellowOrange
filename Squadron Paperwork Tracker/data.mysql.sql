DROP DATABASE IF EXISTS data;

CREATE DATABASE data;
USE data;

CREATE TABLE form10 (
  cadetName CHARACTER VARYING(30) NOT NULL,
  type BOOLEAN, -- 0 for bad, 1 for good
  
  PRIMARY KEY(cadetName)
);
  

CREATE TABLE cadet (
	cadetName CHARACTER VARYING(30) NOT NULL,
	classYear INTEGER(4) NOT NULL,
	squad INTEGER(2) NOT NULL,
	form10 BOOLEAN,
  
	PRIMARY KEY (cadetName),
  FOREIGN KEY (form10) REFERENCES form10 (cadetName)
);

INSERT INTO cadet (cadetName, classYear, squad, form10) VALUES
('Doe', '2021', '01', '1'),
('Doe', '2021', '01', '1'),
('Doe', '2021', '01', '1'),
('Doe', '2021', '01', '1'),
('Doe', '2021', '01', '1'),
('Coughman', '2024', '40', '0'),
('Coughman', '2024', '40', '0'),
('Coughman', '2024', '40', '0'),
('Coughman', '2024', '40', '0'),
('Coughman', '2024', '40', '0');



