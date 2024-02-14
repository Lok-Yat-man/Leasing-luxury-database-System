create database lab4;

use lab4;

create table customers(
    `Customer_ID` varchar(5) not null,
    `Last_Name` varchar(10) not null,
    `First_Name` varchar(10) not null,
    `Address` varchar(20) not null,
    `Telephone` varchar(20) not null,
    `Cell_Phone` varchar(20) not null,
    `Email_Address` varchar(20) not null,
    `Credit_Card` varchar(12) not null,
    primary key(Customer_ID)
);

create table bags(
    `Bag_ID` varchar(4) not null,
    `Name` varchar(30) not null,
    `Color` varchar(10) not null,
    `Manufacturer` varchar(20) not null,
    `Price_Per_Day` float(2) not null,
    primary key(Bag_ID)
);

create table rent(
    `Customer_ID` varchar(5) not null,
    `Bag_ID` varchar(4) not null,
    `Date_Rented` date not null,
    `Date_Returned` date not null,
    `Optional_Insurance` boolean not null,
    primary key(Customer_ID, Bag_ID, Date_Rented),
    foreign key(Customer_ID) REFERENCES customers(Customer_ID),
    foreign key(Bag_ID) REFERENCES bags(Bag_ID)
);

create table rent_current(
    `Customer_ID` varchar(5) not null,
    `Bag_ID` varchar(4) not null,
    `Date_Rented` date not null,
    `Date_Returned` date not null,
    `Optional_Insurance` boolean not null,
    `CurrentD` Date,
    primary key(Customer_ID, Bag_ID, Date_Rented),
    foreign key(Customer_ID) REFERENCES customers(Customer_ID),
    foreign key(Bag_ID) REFERENCES bags(Bag_ID)
);