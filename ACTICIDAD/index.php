https://josejuansanchez.org/bd/ejercicios-consultas-sql/index.html

DROP DATABASE IF EXSTS Hotel;
CREATE DATABASE Hotel CHARACTER set utf8mb4;
USE Hotel;

CREATE TABLE usuarios{
    id INT AUTO_INCREMENT PRIMATY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    dni VARCHAR(8) NOT NULL,
    celular VARCHAR(20) NOT NULL,
};
CREATE TABLE reservas{
    id INT AUTO_INCREMENT PRIMATY KEY,
    fechaingreso DATE NOT NULL,
    noches INT(3) NOT NULL,
    habitacion VARCHAR(15) NOT NULL,
    huespedes INT(3)CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    usuario_id INT(10) NOT FULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
};
