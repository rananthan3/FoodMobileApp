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

A script shown below automates the following:

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


CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1


You can find these files in table.sql and import them using the following:

mysql -u root -p -e "CREATE DATABASE demo"
mysql -u username -p demo < demo.sql

###### Update Database Connection Parameters

Update db.php in the /login folder to include the user, password, and database in which the tables were created.


###### Integration with Stripe

Update config.php in the /login folder to add stripe key parameters

https://stripe.com/docs/keys

https://stripe.com/docs/checkout/php


###### Integration with AWS S3 (Simple Storage Service)

The upload and view photos will not work out of the box.  You will need two extra files page.php and example-form.php to have this functionality.  The files page.php and example-form.php allow you to add images of your farm to S3.  The code contains a non-publishable AWS keys.  If you need to upload images in S3 and find this feature useful, email me at rajan.ananthan@gmail.com.

## How to Add Products to Your Inventory

###### Update Tables

INSERT INTO `Product`(`ID`, `Name`, `Description`, `Price`, `Inventory`) VALUES ( 2005,"Corn","Yellow Corn",4.99,60)

###### Create/Edit PHP Files

1. Edit login/cart.php to include your product image
2. Create a file corn.php in /login/items and include the images of the varieties of corn you have and edit the id and name fields 

For example in corn.php

```html
<img src="../yellowcorn.jpeg" height="200" width="200" >
Quantity: <input type="text" name="2005" width="48" id="2005" ><br>	
  	
  	
<img src="../purplecorn.jpeg" height="200" width="200" >
Quantity: <input type="text" name="2006" width="48" id="2006" ><br>	
```






[Visit Us](http://foodio.000webhostapp.com)
