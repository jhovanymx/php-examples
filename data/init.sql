USE test;

CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(32) NOT NULL,
    email VARCHAR(50),
    age INT(3) UNSIGNED,
    country VARCHAR(2),
    lastlogin TIMESTAMP
);

CREATE TABLE countries(
    id VARCHAR(2) PRIMARY KEY,
    name VARCHAR(30) NOT NULL
);

CREATE TABLE desserts(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    votes INT(4) UNSIGNED
);

CREATE TABLE movies(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30) NOT NULL,
    year INT(4) UNSIGNED,
    duration INT(3) UNSIGNED,
    country VARCHAR(2)
);

-- Admin user, password r2d2
INSERT INTO users VALUES (NULL, 'admin', '3e0fd1ad8efb39d90b8cd3b04a6c94f1', 'admin@softic.com', 45, 'MX', NULL);
-- password ch33r5
INSERT INTO users VALUES (NULL, 'jhovanymx', '23d305b8cec735c12b9ce39cee0549bc', 'jhovanymx@softic.com', 45, 'MX', NULL);

INSERT INTO countries VALUES ('US', 'United States');
INSERT INTO countries VALUES ('MX', 'Mexico');
INSERT INTO countries VALUES ('JP', 'Japan');
INSERT INTO countries VALUES ('SP', 'Spain');
INSERT INTO countries VALUES ('AR', 'Argentina');

INSERT INTO desserts VALUES (NULL, 'Cupcake', 0);
INSERT INTO desserts VALUES (NULL, 'Marshmallow', 0);
INSERT INTO desserts VALUES (NULL, 'Icecream Sandwich', 0);
INSERT INTO desserts VALUES (NULL, 'Pie', 0);

INSERT INTO movies VALUES (NULL, 'Back to the future', 1985, 116, 'US');
INSERT INTO movies VALUES (NULL, 'El hubiera si existe', 2019, 96, 'MX');
INSERT INTO movies VALUES (NULL, 'Your name', 2016, 112, 'JP');
INSERT INTO movies VALUES (NULL, 'Inception', 2010, 116, 'US');
INSERT INTO movies VALUES (NULL, 'Casese quien pueda', 2014, 10796, 'MX');
INSERT INTO movies VALUES (NULL, 'Howl''s Moving Castle', 2004, 112, 'JP');
INSERT INTO movies VALUES (NULL, 'Flubber', 1997, 94, 'US');
INSERT INTO movies VALUES (NULL, 'No se aceptan devoluciones', 2013, 122, 'MX');
INSERT INTO movies VALUES (NULL, 'A Silent Voice', 2016, 130, 'JP');