-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema dbtiendavirtual
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dbtiendavirtual
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dbtiendavirtual` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema ventas
-- -----------------------------------------------------
USE `dbtiendavirtual` ;

-- -----------------------------------------------------
-- Table `dbtiendavirtual`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbtiendavirtual`.`categorias` (
  `idcategorias` INT(11) NOT NULL AUTO_INCREMENT,
  `codigo_categoria` VARCHAR(10) NOT NULL,
  `nombre_categorias` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcategorias`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `dbtiendavirtual`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbtiendavirtual`.`rol` (
  `idrol` INT(11) NOT NULL AUTO_INCREMENT,
  `nombrerol` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` TEXT NULL DEFAULT NULL,
  `status` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idrol`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `dbtiendavirtual`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbtiendavirtual`.`clientes` (
  `idclientes` INT(11) NOT NULL,
  `fk_idrol` INT(11) NOT NULL,
  `nombre_cliente` VARCHAR(45) NULL DEFAULT NULL,
  `telefono_cliente` VARCHAR(10) NULL DEFAULT NULL,
  `correo_cliente` VARCHAR(100) NULL DEFAULT NULL,
  `contrasenia_cliente` VARCHAR(50) NULL DEFAULT NULL,
	`datecreated_cliente` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idclientes`, `fk_idrol`),
  INDEX `fk_clientes_rol1_idx` (`fk_idrol` ASC) ,
  CONSTRAINT `fk_clientes_rol1`
    FOREIGN KEY (`fk_idrol`)
    REFERENCES `dbtiendavirtual`.`rol` (`idrol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `dbtiendavirtual`.`compania_provedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbtiendavirtual`.`compania_provedor` (
  `idcompania_provedor` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_compania` VARCHAR(45) NOT NULL,
  `direccion_compania` TEXT NOT NULL,
  `telefono_compania` VARCHAR(10) NOT NULL,
  `email_compania` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idcompania_provedor`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `dbtiendavirtual`.`pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbtiendavirtual`.`pedidos` (
  `idpedidos` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha_pedido` DATE NOT NULL,
  `direccion_pedido` TEXT NOT NULL,
  `clientes_idclientes` INT(11) NOT NULL,
  `clientes_fk_idrol` INT(11) NOT NULL,
  PRIMARY KEY (`idpedidos`, `clientes_idclientes`, `clientes_fk_idrol`),
  INDEX `fk_pedidos_clientes1_idx` (`clientes_idclientes` ASC, `clientes_fk_idrol` ASC) ,
  CONSTRAINT `fk_pedidos_clientes1`
    FOREIGN KEY (`clientes_idclientes` , `clientes_fk_idrol`)
    REFERENCES `dbtiendavirtual`.`clientes` (`idclientes` , `fk_idrol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `dbtiendavirtual`.`persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbtiendavirtual`.`persona` (
  `idpersona` INT(11) NOT NULL AUTO_INCREMENT,
  `nroidentificacion` VARCHAR(10) NULL DEFAULT NULL,
  `nombres` VARCHAR(45) NULL DEFAULT NULL,
  `apellidos` VARCHAR(45) NULL DEFAULT NULL,
  `telefono` VARCHAR(10) NULL DEFAULT NULL,
  `email_user` VARCHAR(100) NULL DEFAULT NULL,
  `password` VARCHAR(75) NULL DEFAULT NULL,
  `direccionfiscal` VARCHAR(100) NULL DEFAULT NULL,
  `fk_idrol` INT(11) NOT NULL,
  `estatus` INT(11) NULL DEFAULT NULL,
  `datecreated` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idpersona`, `fk_idrol`),
  INDEX `fk_persona_rol_idx` (`fk_idrol` ASC) ,
  CONSTRAINT `fk_persona_rol`
    FOREIGN KEY (`fk_idrol`)
    REFERENCES `dbtiendavirtual`.`rol` (`idrol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `dbtiendavirtual`.`productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbtiendavirtual`.`productos` (
  `idproductos` INT NOT NULL AUTO_INCREMENT,
  `codigo_producto` VARCHAR(10) NULL,
  `nombre_producto` VARCHAR(45) NULL,
  `Stock` INT(11) NULL,
  `precio_compra` DOUBLE NULL,
  `precio_venta` DOUBLE NULL,
  `categorias_idcategorias` INT(11) NOT NULL,
  `compania_provedor_idcompania_provedor` INT(11) NOT NULL,
  PRIMARY KEY (`idproductos`, `categorias_idcategorias`, `compania_provedor_idcompania_provedor`),
  INDEX `fk_productos_categorias1_idx` (`categorias_idcategorias` ASC) ,
  INDEX `fk_productos_compania_provedor1_idx` (`compania_provedor_idcompania_provedor` ASC) ,
  CONSTRAINT `fk_productos_categorias1`
    FOREIGN KEY (`categorias_idcategorias`)
    REFERENCES `dbtiendavirtual`.`categorias` (`idcategorias`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_productos_compania_provedor1`
    FOREIGN KEY (`compania_provedor_idcompania_provedor`)
    REFERENCES `dbtiendavirtual`.`compania_provedor` (`idcompania_provedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbtiendavirtual`.`carrito`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbtiendavirtual`.`carrito` (
  `productos_idproductos` INT NOT NULL,
  `productos_categorias_idcategorias` INT(11) NOT NULL,
  `productos_compania_provedor_idcompania_provedor` INT(11) NOT NULL,
  `pedidos_idpedidos` INT(11) NOT NULL,
  `pedidos_clientes_idclientes` INT(11) NOT NULL,
  `pedidos_clientes_fk_idrol` INT(11) NOT NULL,
  PRIMARY KEY (`productos_idproductos`, `productos_categorias_idcategorias`, `productos_compania_provedor_idcompania_provedor`, `pedidos_idpedidos`, `pedidos_clientes_idclientes`, `pedidos_clientes_fk_idrol`),
  INDEX `fk_productos_has_pedidos_pedidos1_idx` (`pedidos_idpedidos` ASC, `pedidos_clientes_idclientes` ASC, `pedidos_clientes_fk_idrol` ASC) ,
  INDEX `fk_productos_has_pedidos_productos1_idx` (`productos_idproductos` ASC, `productos_categorias_idcategorias` ASC, `productos_compania_provedor_idcompania_provedor` ASC) ,
  CONSTRAINT `fk_productos_has_pedidos_productos1`
    FOREIGN KEY (`productos_idproductos` , `productos_categorias_idcategorias` , `productos_compania_provedor_idcompania_provedor`)
    REFERENCES `dbtiendavirtual`.`productos` (`idproductos` , `categorias_idcategorias` , `compania_provedor_idcompania_provedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_productos_has_pedidos_pedidos1`
    FOREIGN KEY (`pedidos_idpedidos` , `pedidos_clientes_idclientes` , `pedidos_clientes_fk_idrol`)
    REFERENCES `dbtiendavirtual`.`pedidos` (`idpedidos` , `clientes_idclientes` , `clientes_fk_idrol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


INSERT INTO `dbtiendavirtual`.`rol` (`idrol`, `nombrerol`, `descripcion`, `status`) VALUES ('1', 'Administador', 'Administrador', '1'),
('2', 'Inspector', 'Inspector', '1'), ('3', 'Bodega', 'Bodega', '1'), ('4', 'Ventas', 'Ventas', '1'), ('5', 'Clientes', 'Solo Clientes', '0');


INSERT INTO `persona` (`idpersona`, `nroidentificacion`, `nombres`, `apellidos`, `telefono`, `email_user`, `password`, `direccionfiscal`,
 `fk_idrol`, `estatus`) VALUES ('1', '1725314056', 'Brayan Javier', 'Cabascango Cabascango', '0958700360', 'briankabas012@gmail.com',
 '142536', 'MamaNaty 2, Tabacundo', '1', '1');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
