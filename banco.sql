CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

CREATE TABLE IF NOT EXISTS `mydb`.`tipousuario` (
  `idtipousuario` INT NOT NULL,
  `tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtipousuario`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `matricula` VARCHAR(45) NOT NULL,
  `tipousuario_idtipousuario` INT NOT NULL,
  PRIMARY KEY (`idusuario`),
    FOREIGN KEY (`tipousuario_idtipousuario`)
    REFERENCES `mydb`.`tipousuario` (`idtipousuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`tipoprodutos` (
  `idtipoprodutos` INT NOT NULL AUTO_INCREMENT,
  `tiporoupa` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtipoprodutos`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`produtos` (
  `idprodutos` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `tamanho` VARCHAR(45) NULL,
  `quantidade` VARCHAR(200) NULL,
  `descricao` VARCHAR(45) NULL,
  `idtipoprodutos` INT NOT NULL,
  PRIMARY KEY (`idprodutos`),
    FOREIGN KEY (`idtipoprodutos`)
    REFERENCES `mydb`.`tipoprodutos` (`idtipoprodutos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`usuario_has_produto` (
  `usuario_idusuario` INT NOT NULL,
  `produto.idprodutos` INT NOT NULL,
  PRIMARY KEY (`usuario_idusuario`, `produto.idprodutos`),
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `mydb`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`produto.idprodutos`)
    REFERENCES `mydb`.`produtos` (`idprodutos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

insert into usuario values (1, "Pedro Henrique", "email@", "pedro123", "12345678912", 1);
insert into tipoprodutos values (1, "roupas");