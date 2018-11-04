/* Example .SQL to Add Product 

Usage 

mysql -u root -p demo < product.sql

*/

INSERT INTO `Product`(`ID`, `Name`, `Description`, `Price`, `Inventory`) 
VALUES ('6667', 'Red Okra', 'Red Okra', 6.99, 100), 
('6666', 'Green Okra', 'Green Okra', 7.99, 100) 
