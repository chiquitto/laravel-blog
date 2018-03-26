SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- CREATE DATABASE blog DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
-- USE blog;

-- -----------------------------------------------------
-- Table `categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` INT NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(45) NOT NULL,
  `descricao` TEXT NOT NULL,
  `situacao` CHAR(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idcategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `idcidade` INT NOT NULL,
  PRIMARY KEY (`idadmin`),
  INDEX `fk_admin_cidade1_idx` (`idcidade` ASC),
  CONSTRAINT `fk_admin_cidade1`
    FOREIGN KEY (`idcidade`)
    REFERENCES `mydb`.`cidade` (`idcidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `postagem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `postagem` (
  `idpostagem` INT NOT NULL AUTO_INCREMENT,
  `idcategoria` INT NOT NULL,
  `titulo` VARCHAR(45) NOT NULL,
  `texto` TEXT NOT NULL,
  `datacadastro` DATE NOT NULL,
  `idadmin` INT NOT NULL,
  `situacao` CHAR(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idpostagem`),
  INDEX `fk_post_categoria_idx` (`idcategoria` ASC),
  INDEX `fk_postagem_admin1_idx` (`idadmin` ASC),
  CONSTRAINT `fk_post_categoria`
    FOREIGN KEY (`idcategoria`)
    REFERENCES `categoria` (`idcategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_postagem_admin1`
    FOREIGN KEY (`idadmin`)
    REFERENCES `admin` (`idadmin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cidade` (
  `idcidade` INT NOT NULL AUTO_INCREMENT,
  `cidade` VARCHAR(45) NOT NULL,
  `uf` CHAR(2) NOT NULL,
  PRIMARY KEY (`idcidade`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `anuncio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anuncio` (
  `idanuncio` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `url` VARCHAR(255) NOT NULL,
  `validade` DATE NOT NULL,
  PRIMARY KEY (`idanuncio`))
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

Insert Into categoria (categoria, descricao, situacao) VALUES
  ('Jogos', 'Jogos', '1'),
  ('Politica', 'Politica', '0'),
  ('Esportes', 'Esportes', '1');

Insert Into cidade (cidade, uf) VALUES
  ('Bonito', 'MS'),
  ('Campo Grande', 'MS'),
  ('Cianorte', 'PR'),
  ('Curitiba', 'PR'),
  ('Dourados', 'MS'),
  ('Florianopolis', 'SC'),
  ('Guaira', 'PR'),
  ('Navirai', 'MS'),
  ('Pretopolis', 'RJ'),
  ('Rio de Janeiro', 'RJ'),
  ('Teresopolis', 'RJ'),
  ('Umuarama', 'PR');

Insert Into admin (nome, login, senha, idcidade) VALUES
  ('Alisson G. Chiquitto', 'admin', 'admin', 3);

Insert Into postagem (idcategoria, titulo, texto, datacadastro, idadmin, situacao) VALUES
  (1, 'Counter Strike 1.6 é lançado', 'O lançamento foi na noite de ontem na maior feira de games do mundo', '2000-10-15', 1, 1),
  (3, 'Corinthians conquista a série B', 'O Corinthians depois da desastrosa campanha do ano passado, enfim conseguiu subir para primeira divisão do Campeonato Brasileiro após conquistar o título da série B', '2010-12-05', 1, 1)
;

Insert Into anuncio (titulo, url, validade) VALUES
  ('Ford', 'http://ford.com.br', '2020-12-31'),
  ('Fiat', 'http://fiat.com.br', '2021-05-01');
