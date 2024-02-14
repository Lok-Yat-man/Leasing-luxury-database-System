<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style type="text/css">
        table {
            font-family: Arial, Helvetica, sans-serif;
            width: 250px;
            margin-top: 200px;
        }

        th {
            font-size: 25px;
            font-family: 黑体;
            background-color: #FFD700;
            padding: 20px;
            border-radius: 15px;
        }

        td {
            font-size: 18px;
            font-weight: bold;
            color: black;
            padding: 15px;
            border: 1px thick;
            border-radius: 15px;
        }

        a {
            display: block;
            text-decoration: none;
        }

        td:hover {
            background-color: green;
        }

        .title-content{
            float: left;
            margin-top: 150px;
            padding: 0px 150px;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <?php
    ini_set('date.timezone', 'Asia/Shanghai');
    include("conn.php");

    $res = mysqli_query($conn, "show tables from lab4");
    if (!$res)
        die("no tables");

    echo '<table style="float:left;width:350px">';
    echo '<tr><th>Tables of all:</th></tr>';
    $row = mysqli_num_rows($res);
    for ($i = 0; $i < $row; $i++) {
        $dbrow = mysqli_fetch_array($res);
        $tableName = $dbrow[0];
        if ($tableName != 'rent_current') {
            $tr = '<a href="tableInfo.php?tableName=' . $tableName . '">' . $tableName . '</a>';
            echo "<tr><td>" . $tr . "</td></tr>";
        }
    }

    

    echo '<table style="float:right">';
    echo '<tr><th colspan="3">Operation</th></tr>';
    echo '<tr>';
    echo '<td><a href="selectfor_manu.php">Select For Manufacturer</a></td>';
    echo '<td><a href="houtai/bestCustomer.php">Best Customers</a></td>';
    echo '<td><a href="costsCustomer.php">Rental Costs per Customer</a></td>';
    echo '</tr><tr>';
    echo '<td><a href="insertRent.php">Add Rent</a></td>';
    echo '<td><a href="insertBag.php">Add Bags</a></td>';
    echo '<td><a href="houtai\extend_expire.php">Check Expired</a></td>';
    echo '</tr></table>';
    echo '<div class="title-content"><p>Leasing Luxury Database System</p></div>';
    ?>
    <style>
        td {
            text-align: center;
        }
    </style>
</body>

</html>