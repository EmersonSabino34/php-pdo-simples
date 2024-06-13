-- Contando o total por sexo
SELECT
    COUNT(sexo) AS 'total por sexo'
FROM cliente
GROUP BY sexo

-- Contando o total do sexo feminino
SELECT
    COUNT(*) as 'total de mulheres'
    FROM cliente
WHERE sexo = 'feminino'

-- Contando o total do sexo masculino
SELECT
    COUNT(*) as 'total de homens'
    FROM cliente
WHERE sexo = 'masculino'