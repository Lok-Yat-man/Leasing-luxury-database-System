DELIMITER //
CREATE trigger tri_insertRent
after insert on rent
        INSERT INTO rent_current 
            VALUES(new.Customer_ID,
                    new.Bag_ID,
                    new.Date_Rented,
                    new.Date_Returned,
                    new.Optional_Insurance,
                    CURRENT_DATE
                    );
END // 
DELIMITER ;


