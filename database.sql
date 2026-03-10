CREATE DATABASE universite;
USE universite;

CREATE TABLE etudiants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    email VARCHAR(100),
    filiere VARCHAR(100)
);
