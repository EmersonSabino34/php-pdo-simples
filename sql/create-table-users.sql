CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) unique NOT NULL,
    email VARCHAR(50) unique NOT NULL,
    senha VARCHAR(100) NOT NULL,
    nivel VARCHAR(12) DEFAULT 'standard',

    criado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    atualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO users(nome, email, senha) 
VALUES
    ('carol', 'carol@gmail.com', '123'),
    ('alex', 'alex@gmail.com', '123'),
    ('pedro', 'pedro@gmail.com', '123');