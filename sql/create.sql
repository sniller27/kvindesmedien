-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema somethi1_kvindesmedien
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema somethi1_kvindesmedien
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `somethi1_kvindesmedien` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `somethi1_kvindesmedien` ;

-- -----------------------------------------------------
-- Table `somethi1_kvindesmedien`.`newsletters`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_kvindesmedien`.`newsletters` (
  `idnewsletters` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NULL,
  PRIMARY KEY (`idnewsletters`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_kvindesmedien`.`zipcodes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_kvindesmedien`.`zipcodes` (
  `idzipcodes` INT NOT NULL,
  `Cityname` VARCHAR(45) NULL,
  `Region` VARCHAR(45) NULL,
  PRIMARY KEY (`idzipcodes`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_kvindesmedien`.`employees`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_kvindesmedien`.`employees` (
  `idemployees` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(100) NULL,
  `lastname` VARCHAR(100) NULL,
  `phone` INT(12) NULL,
  `email` VARCHAR(100) NULL,
  `address` VARCHAR(100) NULL,
  `zipcode` INT(4) NULL,
  `zipcodes_idzipcodes` INT NULL,
  PRIMARY KEY (`idemployees`),
  INDEX `fk_employees_zipcodes1_idx` (`zipcodes_idzipcodes` ASC),
  CONSTRAINT `fk_employees_zipcodes1`
    FOREIGN KEY (`zipcodes_idzipcodes`)
    REFERENCES `somethi1_kvindesmedien`.`zipcodes` (`idzipcodes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_kvindesmedien`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_kvindesmedien`.`products` (
  `idproduct` INT NOT NULL AUTO_INCREMENT,
  `productname` VARCHAR(100) NULL,
  `productdescription` TEXT(500) NULL,
  `price` INT(7) NULL,
  `mainimage` VARCHAR(100) NULL,
  `employees_idemployees` INT NULL,
  PRIMARY KEY (`idproduct`),
  INDEX `fk_products_employees1_idx` (`employees_idemployees` ASC),
  CONSTRAINT `fk_products_employees1`
    FOREIGN KEY (`employees_idemployees`)
    REFERENCES `somethi1_kvindesmedien`.`employees` (`idemployees`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_kvindesmedien`.`productimages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_kvindesmedien`.`productimages` (
  `idproductimages` INT NOT NULL AUTO_INCREMENT,
  `produkter_idprodukter` INT NOT NULL,
  `imagesource` VARCHAR(100) NULL,
  PRIMARY KEY (`idproductimages`),
  INDEX `fk_productimages_produkter_idx` (`produkter_idprodukter` ASC),
  CONSTRAINT `fk_productimages_produkter`
    FOREIGN KEY (`produkter_idprodukter`)
    REFERENCES `somethi1_kvindesmedien`.`products` (`idproduct`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_kvindesmedien`.`productcategory`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_kvindesmedien`.`productcategory` (
  `idproductcategory` INT NOT NULL AUTO_INCREMENT,
  `categoryname` VARCHAR(100) NULL,
  PRIMARY KEY (`idproductcategory`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_kvindesmedien`.`video`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_kvindesmedien`.`video` (
  `idvideo` INT NOT NULL AUTO_INCREMENT,
  `videosource` VARCHAR(100) NULL,
  PRIMARY KEY (`idvideo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_kvindesmedien`.`exhibitionsites`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_kvindesmedien`.`exhibitionsites` (
  `idexhibitionsites` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(150) NULL,
  `logourl` VARCHAR(100) NULL,
  `phone` INT(12) NULL,
  `address` VARCHAR(100) NULL,
  `zipcode` INT(4) NULL,
  `zipcodes_idzipcodes` INT NULL,
  PRIMARY KEY (`idexhibitionsites`),
  INDEX `fk_exhibitionsites_zipcodes1_idx` (`zipcodes_idzipcodes` ASC),
  CONSTRAINT `fk_exhibitionsites_zipcodes1`
    FOREIGN KEY (`zipcodes_idzipcodes`)
    REFERENCES `somethi1_kvindesmedien`.`zipcodes` (`idzipcodes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_kvindesmedien`.`exhibitionimages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_kvindesmedien`.`exhibitionimages` (
  `idexhibitionimages` INT NOT NULL AUTO_INCREMENT,
  `imageurl` VARCHAR(100) NULL,
  `exhibitionsites_idexhibitionsites` INT NULL,
  PRIMARY KEY (`idexhibitionimages`),
  INDEX `fk_exhibitionimages_exhibitionsites2_idx` (`exhibitionsites_idexhibitionsites` ASC),
  CONSTRAINT `fk_exhibitionimages_exhibitionsites2`
    FOREIGN KEY (`exhibitionsites_idexhibitionsites`)
    REFERENCES `somethi1_kvindesmedien`.`exhibitionsites` (`idexhibitionsites`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_kvindesmedien`.`productcategory_has_products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_kvindesmedien`.`productcategory_has_products` (
  `productcategory_idproductcategory` INT NOT NULL,
  `products_idproduct` INT NOT NULL,
  PRIMARY KEY (`productcategory_idproductcategory`, `products_idproduct`),
  INDEX `fk_productcategory_has_products_products1_idx` (`products_idproduct` ASC),
  INDEX `fk_productcategory_has_products_productcategory1_idx` (`productcategory_idproductcategory` ASC),
  CONSTRAINT `fk_productcategory_has_products_productcategory1`
    FOREIGN KEY (`productcategory_idproductcategory`)
    REFERENCES `somethi1_kvindesmedien`.`productcategory` (`idproductcategory`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_productcategory_has_products_products1`
    FOREIGN KEY (`products_idproduct`)
    REFERENCES `somethi1_kvindesmedien`.`products` (`idproduct`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_kvindesmedien`.`customercompanies`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_kvindesmedien`.`customercompanies` (
  `idcustomercompanies` INT NOT NULL AUTO_INCREMENT,
  `companyname` VARCHAR(100) NULL,
  `logourl` VARCHAR(150) NULL,
  `phone` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `zipcodes_idzipcodes` INT NULL,
  PRIMARY KEY (`idcustomercompanies`),
  INDEX `fk_customercompanies_zipcodes1_idx` (`zipcodes_idzipcodes` ASC),
  CONSTRAINT `fk_customercompanies_zipcodes1`
    FOREIGN KEY (`zipcodes_idzipcodes`)
    REFERENCES `somethi1_kvindesmedien`.`zipcodes` (`idzipcodes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `somethi1_kvindesmedien`.`exhibitionimages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `somethi1_kvindesmedien`.`exhibitionimages` (
  `idexhibitionimages` INT NOT NULL AUTO_INCREMENT,
  `imageurl` VARCHAR(100) NULL,
  `exhibitionsites_idexhibitionsites` INT NULL,
  PRIMARY KEY (`idexhibitionimages`),
  INDEX `fk_exhibitionimages_exhibitionsites2_idx` (`exhibitionsites_idexhibitionsites` ASC),
  CONSTRAINT `fk_exhibitionimages_exhibitionsites2`
    FOREIGN KEY (`exhibitionsites_idexhibitionsites`)
    REFERENCES `somethi1_kvindesmedien`.`exhibitionsites` (`idexhibitionsites`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
