CREATE DATABASE atvPHP;
USE atvPHP;

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(100) NOT NULL
);

INSERT INTO usuarios (nome, email, senha)
VALUES ('Arthur', 'teste@gmail.com', 'senha123');