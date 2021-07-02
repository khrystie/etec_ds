CREATE TABLE `alunoconcluinte` (
  `idalunoconcluinte` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `nota1` float NOT NULL,
  `nota2` float NOT NULL,
  `nota3` float NOT NULL,
  `nota4` float NOT NULL,
  PRIMARY KEY (`idalunoconcluinte`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4

INSERT INTO `alunoconcluinte` (`idalunoconcluinte`, `nome`, `nota1`, `nota2`, `nota3`, `nota4`) VALUES
(1, 'Eduarda', 10, 10, 9, 10),
(2, 'Paulo', 10, 9, 8, 9),
(3, 'Igor', 10, 8, 10, 10),
(4, 'Guilherme', 10, 9, 8, 7),
(5, 'Henrique', 9, 9, 8, 7),
(6, 'Nilson', 10, 9, 10, 9),
(7, 'Ana', 9, 9, 8, 8),
(8, 'Amanda', 8, 9, 9, 8),
(9, 'Carlos', 6, 6, 5, 6),
(10, 'Pedro', 8, 8, 8, 7);

