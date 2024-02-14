DROP PROCEDURE IF EXISTS add_bags;

DELIMITER $$ 
CREATE PROCEDURE add_bags(in bagsid varchar(4),
in bagsname varchar(30),
in bagscolor varchar(10),
in bagsmanu varchar(20),
in bagsppd float) 
BEGIN
    insert into bags values(
        bagsid,
        bagsname,
        bagscolor,
        bagsmanu,
        bagsppd
    );
END $$ 
DELIMITER ;
