CREATE DATABASE todo;

CREATE TABLE todo.task ( 
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT ,
  t_name VARCHAR(20) NOT NULL ,
  t_description VARCHAR(200) NOT NULL ,
  t_date DATE NOT NULL ,
  t_priority INT NOT NULL);


