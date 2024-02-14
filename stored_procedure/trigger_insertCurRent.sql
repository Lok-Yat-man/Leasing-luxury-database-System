DELIMITER //
CREATE trigger tri_insertCurRent
before update 
on rent_current
for each row
    if (datediff(old.Date_Returned,new.CurrentD)=0)
        then INSERT INTO rent 
            VALUES(new.Customer_ID,
                    new.Bag_ID,
                    new.Date_Returned,
                    date_add(new.Date_Returned,INTERVAL 7 DAY),
                    new.Optional_Insurance);
END if;  // 
DELIMITER ;


