-- MySQL Script generated by MySQL Workbench
-- Sun Oct 21 18:18:13 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema geek_gallery
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema geek_gallery
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `geek_gallery` DEFAULT CHARACTER SET utf8 ;
USE `geek_gallery` ;

-- -----------------------------------------------------
-- Table `geek_gallery`.`images`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `geek_gallery`.`images` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `gallery_id` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `size` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
