DROP PROCEDURE IF EXISTS bestCustomer;

DELIMITER $$ 
CREATE PROCEDURE bestCustomer() 
BEGIN
SELECT
    Last_Name,
    First_Name,
    `Address`,
    Telephone,
    sum(datediff(Date_Returned, Date_Rented)) AS `Total Length of rental`
FROM
    rent,
    customers
WHERE
    rent.Customer_ID = customers.Customer_ID
GROUP BY
    rent.Customer_ID
order BY
    `Total Length of rental` desc;

END $$ 
DELIMITER ;
