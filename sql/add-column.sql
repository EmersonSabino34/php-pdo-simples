ALTER TABLE users
ADD telefone varchar(20) unique;

ALTER TABLE users 
    MODIFY telefone varchar(20) AFTER nome