create event add_day
on schedule
every 1 day 
do UPDATE rent_current set CurrentD=date_add(CurrentD,INTERVAL 1 DAY);