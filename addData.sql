use lab4;

INSERT INTO
    `customers` (
        `Customer_ID`,
        `Last_Name`,
        `First_Name`,
        `Address`,
        `Telephone`,
        `Cell_Phone`,
        `Email_Address`,
        `Credit_Card`
    )
VALUES
    (
        "M-62",
        "Murray",
        "Annabelle",
        "59 W. Central Ave",
        "404-998-3928",
        "404-887-3829",
        "belle@comcast.net",
        "443355463212"
    ),
    (
        "F-59",
        "Franco",
        "Gina",
        "1012 Peachtree St",
        "404-887-2342",
        "404-765-1263",
        "gf59@gmail.com",
        "443398764532"
    ),
    (
        'Q-13',
        'Quinn',
        'Sally',
        '54 Oak Ave',
        '404-987-3427',
        '569-984-3894',
        'quinn45@gmail.com',
        '443398765439'
    ),
    (
        'L-29',
        'Lopato',
        'Maria',
        '5490 West 5th',
        '404-234-8876',
        '569-001-0989',
        'mrl@hotmail.com',
        '443352635423'
    ),
    (
        'Z-30',
        'Zern',
        'Joan',
        '58 W. Central Ave',
        '404-675-0091',
        '404-776-4536',
        'zern@comcast.net',
        '443357643254'
    ),
    (
        'S-63',
        'Smith',
        'Patricia',
        '1700 E. Lincoln Ave',
        '404-765-3342',
        '404-121-4736',
        'patti1@gmail.com',
        '443398762534'
    ),
    (
        'P-91',
        'Pao',
        'Jill',
        '89 Orchard',
        '404-887-9238',
        '404-342-9087',
        'pao@comcast.net',
        '443367256543'
    ),
    (
        'B-17',
        'Berry',
        'Anna',
        '9 Pleasant Way',
        '404-887-4673',
        '404-876-3376',
        'aberry@hotmail.com',
        '443376562837'
    );

INSERT INTO
    `bags` (
        `Bag_ID`,
        `Name`,
        `Color`,
        `Manufacturer`,
        `Price_Per_Day`
    )
VALUES
    (
        '101',
        'Claudia',
        'White',
        'Louis Vuitton',
        '8.75'
    ),
    (
        '102',
        'Cabas Piano',
        'Multi',
        'Louis Vuitton',
        '8.75'
    ),
    (
        '103',
        'Monogram Pochette',
        'Multi',
        'Louis Vuitton',
        '8.75'
    ),
    (
        '104',
        'Satchel',
        'Camel',
        'Coach',
        '9.00'
    ),
    (
        '105',
        'Hippie Flap',
        'Green',
        'Coach',
        '9.00'
    ),
    (
        '106',
        'Bleeker Bucket',
        'Blue',
        'Coach',
        '9.00'
    ),
    (
        '107',
        'Messenger',
        'Black',
        'Prada',
        '9.50'
    ),
    (
        '108',
        'Fairy',
        'Multi',
        'Prada',
        '9.50'
    ),
    (
        '109',
        'Glove Soft Pebble',
        'Mauve',
        'Prada',
        '9.50'
    ),
    (
        '110',
        'Haymarket Woven Warrier',
        'Gold',
        'Burberry',
        '10.00'
    ),
    (
        '111',
        'Knight',
        'Plaid',
        'Burberry',
        '10.00'
    );

INSERT INTO
    `rent` (
        `Customer_ID`,
        `Bag_ID`,
        `Date_Rented`,
        `Date_Returned`,
        `Optional_Insurance`
    )
VALUES
    (
        'M-62',
        '101',
        '2011/4/12',
        '2011/4/30',
        '1'
    ),
    (
        'M-62',
        '107',
        '2011/1/19',
        '2011/2/1',
        '1'
    ),
    (
        'F-59',
        '102',
        '2011/2/11',
        '2011/2/19',
        '1'
    ),
    (
        'F-59',
        '104',
        '2011/3/9',
        '2011/3/11',
        '1'
    ),
    (
        'F-59',
        '105',
        '2011/5/21',
        '2011/5/25',
        '1'
    ),
    (
        'Q-13',
        '110',
        '2011/3/16',
        '2011/3/17',
        '0'
    ),
    (
        'L-29',
        '106',
        '2011/5/18',
        '2011/5/25',
        '0'
    ),
    ('Z-30', '108', '2011/1/1', '2011/2/1', '1'),
    ('Z-30', '101', '2011/6/2', '2011/6/8', '1'),
    ('Z-30', '103', '2011/5/6', '2011/5/9', '1'),
    (
        'S-63',
        '109',
        '2011/6/2',
        '2011/6/30',
        '0'
    ),
    (
        'P-91',
        '111',
        '2011/2/19',
        '2011/3/1',
        '1'
    ),
    (
        'P-91',
        '111',
        '2011/3/30',
        '2011/4/2',
        '1'
    ),
    ('B-17', '101', '2011/3/5', '2011/3/9', '0'),
    (
        'B-17',
        '103',
        '2011/4/1',
        '2011/4/21',
        '0'
    ),
    ('B-17', '106', '2011/5/5', '2011/5/9', '0');

INSERT INTO
    `rent_current` (
        `Customer_ID`,
        `Bag_ID`,
        `Date_Rented`,
        `Date_Returned`,
        `Optional_Insurance`,
        'CurrentD'
    )
VALUES
    (
        'M-62',
        '101',
        '2011/4/12',
        '2011/4/30',
        '1',
        CURRENT_DATE
    ),
    (
        'M-62',
        '107',
        '2011/1/19',
        '2011/2/1',
        '1',
        CURRENT_DATE
    ),
    (
        'F-59',
        '102',
        '2011/2/11',
        '2011/2/19',
        '1',
        CURRENT_DATE
    ),
    (
        'F-59',
        '104',
        '2011/3/9',
        '2011/3/11',
        '1',
        CURRENT_DATE
    ),
    (
        'F-59',
        '105',
        '2011/5/21',
        '2011/5/25',
        '1',
        CURRENT_DATE
    ),
    (
        'Q-13',
        '110',
        '2011/3/16',
        '2011/3/17',
        '0',
        CURRENT_DATE
    ),
    (
        'L-29',
        '106',
        '2011/5/18',
        '2011/5/25',
        '0',
        CURRENT_DATE
    ),
    ('Z-30', '108', '2011/1/1', '2011/2/1', '1',CURRENT_DATE),
    ('Z-30', '101', '2011/6/2', '2011/6/8', '1',CURRENT_DATE),
    ('Z-30', '103', '2011/5/6', '2011/5/9', '1',CURRENT_DATE),
    (
        'S-63',
        '109',
        '2011/6/2',
        '2011/6/30',
        '0',
        CURRENT_DATE
    ),
    (
        'P-91',
        '111',
        '2011/2/19',
        '2011/3/1',
        '1',
        CURRENT_DATE
    ),
    (
        'P-91',
        '111',
        '2011/3/30',
        '2011/4/2',
        '1',
        CURRENT_DATE
    ),
    ('B-17', '101', '2011/3/5', '2011/3/9', '0',CURRENT_DATE),
    (
        'B-17',
        '103',
        '2011/4/1',
        '2011/4/21',
        '0',
        CURRENT_DATE
    ),
    ('B-17', '106', '2011/5/5', '2011/5/9', '0',CURRENT_DATE);