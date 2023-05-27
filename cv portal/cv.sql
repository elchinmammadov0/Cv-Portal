CREATE DATABASE cv_portal;
USE cv_portal;
CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    name text,
    surname text,
    phone VARCHAR(50),
    gender text,
    email text,
    username text,
    password VARCHAR(255),
    PRIMARY KEY (id)
    
);
CREATE TABLE cv (
    id INT NOT NULL AUTO_INCREMENT,
    education text,
    work text,
    skills text,
    keywords VARCHAR (50),
    PRIMARY KEY (id)
);
