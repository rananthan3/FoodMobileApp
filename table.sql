CREATE  TABLE IF NOT EXISTS `demo`.`Customer` (
  `ID` INT NOT NULL ,
  `Name` TEXT NOT NULL ,
  `PhoneNo` VARCHAR(45) NULL ,
  `Address` VARCHAR(250),
   `Email` VARCHAR(200),
  PRIMARY KEY (`ID`) )
ENGINE = InnoDB;

CREATE  TABLE IF NOT EXISTS `demo`.`Order` (
  `ID` INT NOT NULL ,
  `customer_id` INT NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `fk_Order_1_idx` (`customer_id` ASC) ,
  CONSTRAINT `fk_Order_1`
    FOREIGN KEY (`customer_id` )
    REFERENCES `demo`.`Customer` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE  TABLE IF NOT EXISTS `demo`.`Product` (
  `ID` INT NOT NULL ,
  `Name` VARCHAR(45) NOT NULL ,
  `Description` TEXT NULL ,
  `Price` NUMERIC(10,2) NOT NULL, 
  PRIMARY KEY (`ID`) )
ENGINE = InnoDB;



CREATE  TABLE IF NOT EXISTS `demo`.`OrderItem` (
  `ID` INT NOT NULL ,
  `Order_ID` INT NOT NULL ,
  `Product_ID` INT NOT NULL ,
  `Quantity` INT NOT NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `fk_OrderItem_1_idx` (`Order_ID` ASC) ,
  INDEX `fk_OrderItem_2_idx` (`Product_ID` ASC) ,
  CONSTRAINT `fk_OrderItem_1`
    FOREIGN KEY (`Order_ID` )
    REFERENCES `demo`.`Order` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_OrderItem_2`
    FOREIGN KEY (`Product_ID` )
    REFERENCES `demo`.`Product` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



CREATE TABLE `demo`.`data` (
  `Email` varchar(100) NOT NULL,
  `Item` varchar(100) NOT NULL,
  `Zip` varchar(5) NOT NULL,
  `Price` double(9,2) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1


CREATE TABLE `demo`.`users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1



