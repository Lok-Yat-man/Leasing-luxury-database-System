<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <style type="text/css">
        table {
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 100px;
        }

        th {
            font-size: 20px;
            font-family: 黑体;
            background-color: rgba(0, 0, 255, 0.7);
        }

        td {
            text-align: center;
        }

        input {
            border: none;
            height: 30px;
            line-height: 30px;
            background: transparent;
        }
    </style>
</head>

<body>
    <h3 style="margin-top: 100px;text-align:center">Please enter the customer`s name you want to search for</h3>
    <div style="text-align: center;">
        <form action="houtai\rentalCost.php" method="get">
            <input type="text" name="last_name" placeholder="Last Name" />
            <input type="text" name="first_name" placeholder="First Name" />
            <button type="submit" value="submit">Submit</button>
        </form>
    </div>
</body>

</html>