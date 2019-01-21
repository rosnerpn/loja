create database loja;
use loja;
--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` text,
  `categoria_id` int(11) DEFAULT NULL,
  `usado` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Insert categorias e produtos

INSERT INTO categorias (nome) values ('Esportes') ,('Material Escolar');
INSERT INTO produtos (nome,preco,descricao,categoria_id) VALUES ('Lapis', '1.00', 'lapis do futurao', 2);
INSERT INTO produtos (nome,preco,descricao,categoria_id) VALUES ('Caneta Azul','1.25','Caneta ponta fina',2);
