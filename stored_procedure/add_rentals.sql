DROP PROCEDURE IF EXISTS add_rentals;

DELIMITER $$ 
CREATE PROCEDURE add_rentals(in cusid varchar(5),in bagid varchar(4),in returndate date,in opi boolean) 
BEGIN
    declare rentdate date default current_date;
    SET time_zone='+08:00';

    insert into rent values(
        cusid,
        bagid,
        rentdate,
        returndate,
        opi,
    )

END $$ 
DELIMITER ;
