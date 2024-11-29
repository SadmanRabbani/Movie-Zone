CREATE DATABASE movie_zone;
USE DATABASE movie_zone;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL UNIQUE,
    Email VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL
);