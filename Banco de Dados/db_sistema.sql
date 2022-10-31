-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema db_sistema
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_sistema
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_sistema` DEFAULT CHARACTER SET utf8 ;
USE `db_sistema` ;

-- -----------------------------------------------------
-- Table `db_sistema`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_sistema`.`categoria` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `db_sistema`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_sistema`.`funcionario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `rg` VARCHAR(45) NOT NULL,
  `cpf` CHAR(11) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(11) NOT NULL,
  `endereco` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `db_sistema`.`pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_sistema`.`pessoa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `rg` VARCHAR(45) NOT NULL,
  `cpf` CHAR(11) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `telefone` VARCHAR(11) NULL DEFAULT NULL,
  `endereco` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) VISIBLE,
  UNIQUE INDEX `rg_UNIQUE` (`rg` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `db_sistema`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_sistema`.`produto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `descricao` TEXT NOT NULL,
  `preco` DOUBLE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `db_sistema`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_sistema`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(200) NULL DEFAULT NULL,
  `senha` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb3;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
