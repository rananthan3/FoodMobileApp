SELECT Order_ID, Product_ID, Quantity, Price, Quantity*Price AS Total FROM OrderItem 
LEFT JOIN Product 
ON OrderItem.Product_ID=Product.ID 
WHERE OrderItem.Order_ID = "419599158";

SELECT SUM(Quantity*Price) AS Total FROM OrderItem 
LEFT JOIN Product 
ON OrderItem.Product_ID=Product.ID 
WHERE OrderItem.Order_ID = "419599158";