# Automato

## An online grocery platform

Automato is an online fresh produce marketplace for local farmers to advertise and accept payments. 

This platform was built using the following Operating System. 

Description:	Linux Mint 18.3 Sylvia
Release:	18.3
Codename:	sylvia

###### Installing LAMP

The first step is to install the LAMP stack.  LAMP stands for Linux, Apache, MySQL, and PHP.  You can find more here:

https://en.wikipedia.org/wiki/LAMP_(software_bundle)

Once the LAMP stack is installed, the next step is to import the table schemas as they are shown below:

###### Create MySQL Tables

CREATE TABLE `Customer` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `PhoneNo` varchar(45) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1


CREATE TABLE `Order` (
  `ID` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_Order_1_idx` (`customer_id`),
  CONSTRAINT `fk_Order_1` FOREIGN KEY (`customer_id`) REFERENCES `Customer` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1


CREATE TABLE `OrderItem` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Order_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_OrderItem_1_idx` (`Order_ID`),
  KEY `fk_OrderItem_2_idx` (`Product_ID`),
  CONSTRAINT `fk_OrderItem_1` FOREIGN KEY (`Order_ID`) REFERENCES `Order` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_OrderItem_2` FOREIGN KEY (`Product_ID`) REFERENCES `Product` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=274 DEFAULT CHARSET=latin1


CREATE TABLE `Product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Description` text,
  `Price` decimal(10,2) NOT NULL,
  `Inventory` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1


CREATE TABLE `data` (
  `Email` varchar(100) NOT NULL,
  `Item` varchar(100) NOT NULL,
  `Zip` varchar(5) NOT NULL,
  `Price` double(9,2) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1


CREATE TABLE `data` (
  `Email` varchar(100) NOT NULL,
  `Item` varchar(100) NOT NULL,
  `Zip` varchar(5) NOT NULL,
  `Price` double(9,2) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1

[Visit Us](http://foodio.000webhostapp.com)
