DROP PROCEDURE IF EXISTS rentalCost;

DELIMITER $$ 
CREATE PROCEDURE rentalCost(in cusID varchar(5)) 
BEGIN
SELECT
    Last_Name,
    First_Name,
    Manufacturer,
    `Name`,
    cast(datediff(Date_Returned, Date_Rented) * Price_Per_Day AS decimal(6,2)) AS `Cost`
FROM
    customers,
    bags,
    rent
WHERE
    rent.Customer_ID = cusID
    AND rent.Bag_ID = bags.Bag_ID
    AND rent.Customer_ID = customers.Customer_ID;


END $$ 
DELIMITER ;
