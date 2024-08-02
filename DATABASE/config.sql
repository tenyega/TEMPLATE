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
 INSERT INTO users(username, email,pwd)
 VALUES
 ('Alice','alice@email.com', '$2y$10$xEuWCA1gFferxLPrrKRlNu8sPu4WEm5.9xGzbLlmpEvK5cCV3RcDa'), -- 12345
  ('Bob','bob@email.com', '$2y$10$3pYYWebcREAiX4IstOV47O3N86WIuZ2k8TZ4/zx3GChRjCusaBQUu'), -- 4321
   ('Charlie','charlie@email.com', '$2y$10$H3CTVumZwFFIyLo2UFWRr.i1npECBBqDx8Mx7Exvryseq4HlMyZti'); -- 0000