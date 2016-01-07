DROP DATABASE IF EXISTS sample_database;
CREATE DATABASE sample_database;
USE sample_database;

CREATE TABLE sample_table (
    id INT PRIMARY KEY AUTO_INCREMENT,
    moji VARCHAR(32)
);

INSERT INTO sample_table () VALUES ();
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 
INSERT INTO sample_table (id) SELECT 0 FROM sample_table; 

UPDATE sample_table SET moji = MD5(RAND());
