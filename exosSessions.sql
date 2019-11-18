CREATE DATABASE exosSessions;

USE exosSessions;

CREATE TABLE `user` (
	user_id INT PRIMARY KEY AUTO_INCREMENT,
	user_name VARCHAR(255),
	user_firstname VARCHAR(255),
	user_email VARCHAR(255),
	user_password VARCHAR(255)
);
