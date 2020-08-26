USE test;

CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    age INT(3),
    location VARCHAR(50),
    date TIMESTAMP
);

CREATE TABLE guests(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    age INT(2),
    enabled BOOLEAN NOT NULL,
    created TIMESTAMP
);

CREATE TABLE desserts(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30),
    votes INT(4) UNSIGNED
);

INSERT INTO desserts VALUES (NULL, 'Cupcake', 0);
INSERT INTO desserts VALUES (NULL, 'Marshmallow', 0);
INSERT INTO desserts VALUES (NULL, 'Icecream Sandwich', 0);
INSERT INTO desserts VALUES (NULL, 'Pie', 0);