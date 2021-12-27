CREATE TABLE cliente
(
    id_cliente SERIAL NOT NULL
    ,nome VARCHAR(100) NOT NULL
    ,data_cadastro TIMESTAMP NOT NULL DEFAULT NOW()
    ,email VARCHAR(250)
    ,PRIMARY KEY (id_cliente)
);

INSERT INTO cliente(
	nome
	,email
) VALUES (
	'Cliente A'
	,'cliente@a.com'
), (
	'Cliente B'
	,'cliente@b.com'
) , (
	'Cliente C'
	,'cliente@c.com'
);