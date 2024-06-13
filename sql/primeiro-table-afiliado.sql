CREATE TABLE IF NOT EXISTS afiliado(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) unique NOT NULL,
    email VARCHAR(50) unique,
    cpf VARCHAR(50) unique,
    telefone VARCHAR(50) unique,
    cep VARCHAR(10),
    uf VARCHAR(50),
    sexo VARCHAR(20) DEFAULT 'não declarado',
    bairro VARCHAR(20),
    logradouro VARCHAR(50),
    complemento VARCHAR(50),
    titulo VARCHAR(50),
    nasc VARCHAR(20),
    zona VARCHAR(20),
    secao VARCHAR(20),

    observação VARCHAR(50),
    checado VARCHAR(12) DEFAULT 'não',

    id_gestor INTEGER ,
    criado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    atualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE afiliado
	ADD CONSTRAINT id_gestor
	FOREIGN KEY (id_gestor) REFERENCES gestor (id) ;

INSERT INTO afiliado(id_gestor, nome, email, cpf, telefone, cep, uf, sexo, bairro, logradouro, complemento, titulo, nasc, zona, secao) 
VALUES
(1, 'mario', 'mario@gmail.com', '010.999.333-01', '6298592-1149', '74961-070', 'go', 'masculino', 'jardim tiradentes', 'rua 05, quadra 18', 'lote 08 casa 2', '1532153215', '20/10/1994', '119', '154'),
(2, 'alana', 'alana@gmail.com', '222.999.333-01', '6299892-5022', '74981-020', 'go', 'feminino', 'jardim tiradentes', 'rua 05, quadra 18', 'lote 08 casa 2', '2032153248', '10/10/1998', '117', '169');