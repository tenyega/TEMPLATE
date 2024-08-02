-- creation of DB CASE SENSITIVE IMP , comments in sql file is with double -

CREATE DATABASE IF NOT EXISTS logsystem;


-- utilisation de la base de donées 

USE logsystem;


-- create a user table
CREATE TABLE IF NOT EXISTS users(
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(50) NOT NULL UNIQUE,
 email VARCHAR(100) NOT NULL UNIQUE,
 pwd VARCHAR(255) NOT NULL
 )ENGINE= INNODB DEFAULT CHARSET= utf8mb4 COLLATE=utf8mb4_general_ci;


 -- inserting the values in the user table;
 INSERT INTO users(id, username, email,pwd)
 VALUES
 ('1','Alice','alice@email.com', '12345'),
  ('2','Bob','bob@email.com', '4321'),
   ('3','Charlie','charlie@email.com', '0000');