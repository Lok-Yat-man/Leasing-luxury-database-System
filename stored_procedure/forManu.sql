DROP PROCEDURE IF EXISTS selectManu;
DELIMITER $$
CREATE PROCEDURE selectManu(in maun_name varchar(20))
BEGIN
    SELECT `Name`,Color,Manufacturer FROM bags WHERE Manufacturer=maun_name;
END $$
DELIMITER ;
