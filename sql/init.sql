CREATE DATABASE IF NOT EXISTS appDB;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT ON appDB.* TO 'user'@'%';
FLUSH PRIVILEGES;

USE appDB;

CREATE TABLE IF NOT EXISTS users (
  ID INT(11) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(20) NOT NULL,
  surname VARCHAR(40) NOT NULL,
  pass VARCHAR(40) NOT NULL,
  grp VARCHAR(40) NOT NULL
);

INSERT INTO users (name, surname, pass, grp)
SELECT * FROM (SELECT 'Tim', 'Gane', 'Timpass', 'users') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Tim' AND surname = 'Gane' AND pass = 'Timpass' AND grp = 'users'
) LIMIT 1;

INSERT INTO users (name, surname, pass, grp)
SELECT * FROM (SELECT 'Ken', 'Lane', 'Kenpass', 'users') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Ken' AND surname = 'Lane' AND pass = 'Kenpass' AND grp = 'users'
) LIMIT 1;

INSERT INTO users (name, surname, pass, grp)
SELECT * FROM (SELECT 'Fan', 'Yandson', 'Fanpass', 'admins') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Fan' AND surname = 'Yandson' AND pass = 'Fanpass' AND grp = 'admins'
) LIMIT 1;

INSERT INTO users (name, surname, pass, grp)
SELECT * FROM (SELECT 'Jim', 'Black', 'Jimpass', 'admins') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Jim' AND surname = 'Black' AND pass = 'Jimpass' AND grp = 'admins'
) LIMIT 1;

CREATE TABLE IF NOT EXISTS products (
  ID INT(11) AUTO_INCREMENT PRIMARY KEY,
  product VARCHAR(20) NOT NULL,
  price VARCHAR(40) NOT NULL
);

INSERT INTO products (product, price)
SELECT * FROM (SELECT 'GeForce 3060', '50000') AS tmp
WHERE NOT EXISTS (
    SELECT product FROM products WHERE product = 'GeForce 3060' AND price = '50000'
) LIMIT 1;

INSERT INTO products (product, price)
SELECT * FROM (SELECT 'iPhone 5', '40000') AS tmp
WHERE NOT EXISTS (
    SELECT product FROM products WHERE product = 'iPhone 5' AND price = '40000'
) LIMIT 1;

INSERT INTO products (product, price)
SELECT * FROM (SELECT 'Mac', '5000') AS tmp
WHERE NOT EXISTS (
    SELECT product FROM products WHERE product = 'Mac' AND price = '5000'
) LIMIT 1;

CREATE TABLE IF NOT EXISTS orders (
  ID INT(11) AUTO_INCREMENT PRIMARY KEY,
  user VARCHAR(40) NOT NULL,
  product VARCHAR(20) NOT NULL,
  price VARCHAR(20) NOT NULL
);