-- Création de la base de données
CREATE DATABASE IF NOT EXISTS iai_togo_db;

-- Utilisation de la base de données
USE iai_togo_db;

-- Création de la table pour stocker les informations des candidats
CREATE TABLE IF NOT EXISTS candidatures (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    date_naissance DATE NOT NULL,
    sexe ENUM('M', 'F') NOT NULL,
    nationalite VARCHAR(255) NOT NULL,
    annee_bac INT NOT NULL,
    serie ENUM('C', 'D', 'E', 'F1', 'F2') NOT NULL,
    birth_certificate VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Création de la table pour stocker les informations des utilisateurs (pour l'authentification)
CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom_utilisateur VARCHAR(255) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL
);

CREATE TABLE dashboard_data (
    id INT PRIMARY KEY AUTO_INCREMENT,
    stats TEXT,
    concours_date DATE,
    deadline_date DATE
);
INSERT INTO dashboard_data (stats, concours_date, deadline_date)
VALUES ('Statistiques de démonstration', '2024-05-01', '2024-04-15');
