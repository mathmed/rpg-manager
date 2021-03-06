-- MySQL Script generated by MySQL Workbench
-- ter 16 out 2018 11:19:02 -03
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema rpg
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema rpg
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `rpg` DEFAULT CHARACTER SET utf8 ;
USE `rpg` ;

-- -----------------------------------------------------
-- Table `rpg`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rpg`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nome_usuario` VARCHAR(45) NOT NULL,
  `email_usuario` VARCHAR(45) NOT NULL,
  `senha_usuario` VARCHAR(45) NOT NULL,
  `apelido_usuario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rpg`.`campanha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rpg`.`campanha` (
  `id_campanha` INT NOT NULL AUTO_INCREMENT,
  `nome_campanha` VARCHAR(45) NOT NULL,
  `data_criacao` DATE NOT NULL,
  `usuario_id_usuario` INT NOT NULL,
  `descricao_campanha` LONGTEXT NOT NULL,
  PRIMARY KEY (`id_campanha`),
  INDEX `fk_campanha_usuario_idx` (`usuario_id_usuario` ASC) ,
  CONSTRAINT `fk_campanha_usuario`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `rpg`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rpg`.`sessao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rpg`.`sessao` (
  `id_sessao` INT NOT NULL AUTO_INCREMENT,
  `descricao_sessao` LONGTEXT NOT NULL,
  `data_sessao` DATE NOT NULL,
  `campanha_id_campanha` INT NOT NULL,
  PRIMARY KEY (`id_sessao`),
  INDEX `fk_sessao_campanha1_idx` (`campanha_id_campanha` ASC) ,
  CONSTRAINT `fk_sessao_campanha1`
    FOREIGN KEY (`campanha_id_campanha`)
    REFERENCES `rpg`.`campanha` (`id_campanha`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rpg`.`anotacao_ficha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rpg`.`anotacao_ficha` (
  `id_anotacao` INT NOT NULL AUTO_INCREMENT,
  `descricao_anotacao` LONGTEXT NOT NULL,
  PRIMARY KEY (`id_anotacao`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rpg`.`habilidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rpg`.`habilidade` (
  `id_habilidade` INT NOT NULL,
  `descricao_habilidade` LONGTEXT NOT NULL,
  PRIMARY KEY (`id_habilidade`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rpg`.`equipamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rpg`.`equipamento` (
  `id_equipamento` INT NOT NULL AUTO_INCREMENT,
  `tipo_equipamento` VARCHAR(45) NOT NULL,
  `descricao_equipamento` LONGTEXT NOT NULL,
  `vantagem` LONGTEXT NOT NULL,
  `oberservacao_equipamento` LONGTEXT NOT NULL,
  PRIMARY KEY (`id_equipamento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rpg`.`pericia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rpg`.`pericia` (
  `id_pericia` INT NOT NULL,
  `nome_pericia` VARCHAR(45) NOT NULL,
  `descricao_pericia` VARCHAR(45) NOT NULL,
  `atributo_pericia` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_pericia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rpg`.`ficha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rpg`.`ficha` (
  `id_ficha` INT NOT NULL AUTO_INCREMENT,
  `nome_personagem` VARCHAR(45) NOT NULL,
  `alinhamento` VARCHAR(45) NOT NULL,
  `classe` VARCHAR(45) NOT NULL,
  `level` INT NOT NULL,
  `forca` INT NOT NULL,
  `inteligencia` INT NOT NULL,
  `sabedoria` INT NOT NULL,
  `destreza` INT NOT NULL,
  `constituicao` INT NOT NULL,
  `carisma` INT NOT NULL,
  `CA` INT NOT NULL,
  `PV` INT NOT NULL,
  `luta` INT NOT NULL,
  `movimento` INT NOT NULL,
  `dono_personagem` VARCHAR(45) NOT NULL,
  `anotacao_ficha_id_anotacao` INT NOT NULL,
  `habilidade_id_habilidade` INT NOT NULL,
  `equipamento_id_equipamento` INT NOT NULL,
  `pericia_id_pericia` INT NOT NULL,
  `campanha_id_campanha` INT NOT NULL,
  PRIMARY KEY (`id_ficha`),
  INDEX `fk_ficha_anotacao_ficha1_idx` (`anotacao_ficha_id_anotacao` ASC) ,
  INDEX `fk_ficha_habilidade1_idx` (`habilidade_id_habilidade` ASC) ,
  INDEX `fk_ficha_equipamento1_idx` (`equipamento_id_equipamento` ASC) ,
  INDEX `fk_ficha_pericia1_idx` (`pericia_id_pericia` ASC) ,
  INDEX `fk_ficha_campanha1_idx` (`campanha_id_campanha` ASC) ,
  CONSTRAINT `fk_ficha_anotacao_ficha1`
    FOREIGN KEY (`anotacao_ficha_id_anotacao`)
    REFERENCES `rpg`.`anotacao_ficha` (`id_anotacao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ficha_habilidade1`
    FOREIGN KEY (`habilidade_id_habilidade`)
    REFERENCES `rpg`.`habilidade` (`id_habilidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ficha_equipamento1`
    FOREIGN KEY (`equipamento_id_equipamento`)
    REFERENCES `rpg`.`equipamento` (`id_equipamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ficha_pericia1`
    FOREIGN KEY (`pericia_id_pericia`)
    REFERENCES `rpg`.`pericia` (`id_pericia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ficha_campanha1`
    FOREIGN KEY (`campanha_id_campanha`)
    REFERENCES `rpg`.`campanha` (`id_campanha`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rpg`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rpg`.`cidade` (
  `id_cidade` INT NOT NULL AUTO_INCREMENT,
  `nome_cidade` VARCHAR(45) NOT NULL,
  `descricao_cidade` LONGTEXT NOT NULL,
  `campanha_id_campanha` INT NOT NULL,
  PRIMARY KEY (`id_cidade`),
  INDEX `fk_cidade_campanha1_idx` (`campanha_id_campanha` ASC) ,
  CONSTRAINT `fk_cidade_campanha1`
    FOREIGN KEY (`campanha_id_campanha`)
    REFERENCES `rpg`.`campanha` (`id_campanha`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rpg`.`npc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rpg`.`npc` (
  `id_npc` INT NOT NULL,
  `descricao_npc` LONGTEXT NOT NULL,
  `campanha_id_campanha` INT NOT NULL,
  PRIMARY KEY (`id_npc`),
  INDEX `fk_npc_campanha1_idx` (`campanha_id_campanha` ASC) ,
  CONSTRAINT `fk_npc_campanha1`
    FOREIGN KEY (`campanha_id_campanha`)
    REFERENCES `rpg`.`campanha` (`id_campanha`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rpg`.`anotacao_campanha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rpg`.`anotacao_campanha` (
  `id_anotacao_campanha` INT NULL AUTO_INCREMENT,
  `descricao_anotacao_camapanha` LONGTEXT NOT NULL,
  `campanha_id_campanha` INT NOT NULL,
  PRIMARY KEY (`id_anotacao_campanha`),
  INDEX `fk_anotacao_campanha_campanha1_idx` (`campanha_id_campanha` ASC) ,
  CONSTRAINT `fk_anotacao_campanha_campanha1`
    FOREIGN KEY (`campanha_id_campanha`)
    REFERENCES `rpg`.`campanha` (`id_campanha`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
