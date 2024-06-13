CREATE TABLE IF NOT EXISTS gestor (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) unique NOT NULL,
    email VARCHAR(50) unique NOT NULL,
    telefone VARCHAR(25) unique NOT NULL,
    senha VARCHAR(50) NOT NULL,
    nivel VARCHAR(12) DEFAULT 'standard',

    criado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    atualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO gestor(nome, email, telefone, senha) 
VALUES
    ('carol', 'carol@gmail.com', '6298592-1149', '123'),
    ('alex', 'alex@gmail.com', '6299892-5022', '123'),
    ('pedro', 'pedro@gmail.com', '6281152-2022', '123');