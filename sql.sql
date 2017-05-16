CREATE DATABASE LOJA;

CREATE TABLE CATEGORIAS(
	ID INT(11) PRIMARY KEY AUTO_INCREMENT,
	TITULO VARCHAR(100) NOT NULL
);
--INSERT INTO categorias (TITULO)VALUES('Sapatos'),('Camisas'),('Calças'),('Bonés')

CREATE TABLE PRODUTOS(
	ID INT(11) PRIMARY KEY AUTO_INCREMENT,
    ID_CATEGORIA INT(11) NOT NULL,
    NOME VARCHAR(100) NOT NULL,
    IMAGEM VARCHAR(36) NOT NULL,
    PRECO FLOAT NOT NULL,
    QUANTIDADE INT(11) NOT NULL,
    DESCRICAO TEXT NOT NULL
);

CREATE TABLE VENDAS(
	ID INT(11) PRIMARY KEY AUTO_INCREMENT,
    ID_USUARIO INT(11) NOT NULL,
    ID_PRODUTO INT(11) NOT NULL,
    QUANTIDADE INT(11) NOT NULL,
    ENDERECO TEXT NOT NULL,
    VALOR FLOAT NOT NULL,
    FORMA_PG INT(11) NOT NULL,
    STATUS_PG INT NOT NULL,
    PG_LINK VARCHAR(200)
);
--ALTER TABLE VENDAS DROP COLUMN ID_PRODUTO;
--ALTER TABLE VENDAS DROP COLUMN QUANTIDADE;
--ALTER TABLE VENDAS ADD STATUS_PG INT NOT NULL;
CREATE TABLE VENDAS_PRODUTOS(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    ID_VENDA INT,
    ID_PRODUTO INT,
    QUANTIDADE INT,
    FOREIGN KEY(ID_VENDA) REFERENCES VENDAS(ID),
    FOREIGN KEY(ID_PRODUTO) REFERENCES PRODUTOS(ID)
);

CREATE TABLE PAGAMENTOS(
	ID INT(11) PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(100) NOT NULL
);
-- INSERT INTO pagamentos (NOME)VALUES ('Grátis'), ('Pagseguro'),('Paypal'), ('Boleto'), ('MoIP')

/* VÁRIOS INSERTS EM PRODUTOS
INSERT INTO PRODUTOS (id, id_categoria,nome,imagem,preco,quantidade,descricao)VALUES(null,1,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 12','imagem.jpg',100,200,'Descricão do produto 12'),
(null,3,'Produto 13','imagem.jpg',100,200,'Descricão do produto 13'),
(null,4,'Produto 133','imagem.jpg',100,200,'Descricão do produto 133'),
(null,1,'Produto 122','imagem.jpg',100,200,'Descricão do produto 122'),
(null,2,'Produto 12222','imagem.jpg',100,200,'Descricão do produto 12222'),
(null,3,'Produto 223 1','imagem.jpg',100,200,'Descricão do produto23 1'),
(null,4,'Produto 231','imagem.jpg',100,200,'Descricão do produto 231'),
(null,1,'Produto 111','imagem.jpg',100,200,'Descricão do produto 111'),
(null,2,'Produto 11121','imagem.jpg',100,200,'Descricão do produto 11121'),
(null,3,'Produto 441','imagem.jpg',100,200,'Descricão do produto 441'),
(null,4,'Produto 144','imagem.jpg',100,200,'Descricão do produto 144'),
(null,1,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 22221','imagem.jpg',100,200,'Descricão do produto 122222'),
(null,3,'Produto 100','imagem.jpg',100,200,'Descricão do produto 1000'),
(null,4,'Produto 41','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 14','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 144','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 144','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 12','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 11','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 122','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 71','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 17','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 15','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 134','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 31','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 31','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 13','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 1fg','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 1s','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 1s','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 178','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 155','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 165','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 51','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 61','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 16','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 166','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 166','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 143','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 341','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 31','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 134','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 134','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 31','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 144','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 14','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 14','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 14','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 143','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 134','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 134','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 14','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 134','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 143','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 143','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 13','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 1s','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 1s','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 1s','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 1s','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 1s','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 1s','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 1s','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 1d','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,1,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,2,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,3,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1'),
(null,4,'Produto 1','imagem.jpg',100,200,'Descricão do produto 1')


*/