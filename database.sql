CREATE DATABASE IF NOT EXISTS milktea_db;
USE milktea_db;

CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    flavor VARCHAR(50),
    size VARCHAR(20),
    toppings VARCHAR(50)
);

