DROP TABLE IF EXISTS task;

CREATE TABLE task(
task_id int not null primary key Auto_increment,
  task_name varchar(20) not null,
  task_description varchar(20) 
);