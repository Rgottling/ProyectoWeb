-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema proyectoWeb2
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `proyectoWeb2` ;

-- -----------------------------------------------------
-- Schema proyectoWeb2
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `proyectoWeb2` DEFAULT CHARACTER SET utf8 ;
USE `proyectoWeb2` ;

-- -----------------------------------------------------
-- Table `productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `productos` ;

CREATE TABLE IF NOT EXISTS `productos` (
  `id_productos` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `modelo` VARCHAR(45) NOT NULL,
  `precio` INT NOT NULL,
  PRIMARY KEY (`id_productos`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `productos`
-- -----------------------------------------------------
START TRANSACTION;
USE `proyectoWeb2`;
INSERT INTO `productos` (`id_productos`, `nombre`, `modelo`, `precio`) VALUES (1, 'Gorra', 'Marvel Hulk ', 400);
INSERT INTO `productos` (`id_productos`, `nombre`, `modelo`, `precio`) VALUES (2, 'Remera ', 'Marvel Spider Man', 1200);
INSERT INTO `productos` (`id_productos`, `nombre`, `modelo`, `precio`) VALUES (3, 'Taza', 'DC Batman', 600);
INSERT INTO `productos` (`id_productos`, `nombre`, `modelo`, `precio`) VALUES (4, 'Buzo', 'Marvel Ms Marvel', 3000);
INSERT INTO `productos` (`id_productos`, `nombre`, `modelo`, `precio`) VALUES (5, 'Cuaderno', 'DC Flash', 900);
INSERT INTO `productos` (`id_productos`, `nombre`, `modelo`, `precio`) VALUES (6, 'Lapicera', 'DC Aquaman', 300);
INSERT INTO `productos` (`id_productos`, `nombre`, `modelo`, `precio`) VALUES (8, 'Mochila', 'Marvel Dr. Strange ', 2000);
INSERT INTO `productos` (`id_productos`, `nombre`, `modelo`, `precio`) VALUES (9, 'Cartuchera', 'Marvel Capitana Marvel', 450);
INSERT INTO `productos` (`id_productos`, `nombre`, `modelo`, `precio`) VALUES (10, 'Funda', 'Marvel AntMan', 320);

COMMIT;

