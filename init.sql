CREATE DATABASE IF NOT EXISTS courseDB;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON courseDB.* TO 'user'@'%';
FLUSH PRIVILEGES;

USE courseDB;

CREATE TABLE IF NOT EXISTS users (
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50) NOT NULL,
	password varchar(50) not null
);

create table if not exists posts (
	postId int AUTO_INCREMENT PRIMARY key,
	postAuthor varchar(50) not null references users (id),
	postBody text not null
)