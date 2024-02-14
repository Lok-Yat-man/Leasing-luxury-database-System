<html>

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
        table{
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 100px;
        }
        th{
            font-size: 20px;
            font-family: 黑体;
            background-color: rgba(0,0,255,0.7);
        }
        td{
            text-align: center;
        }
    </style>
</head>

<body>
    <table align="center" rules="all" cellpadding="10px">
        <?php
        include("conn.php");

        $last_name = $_GET["last_name"];
        $first_name = $_GET["first_name"];
        $flag = 0;

        $colNames = array();
        $res = mysqli_query($conn, "show columns from customers");
        $colNum = mysqli_num_rows($res);
        for ($i = 0; $i < $colNum; $i++) {
            $attribute = mysqli_fetch_array($res);
            if ($attribute[0] == 'Last_Name' || $attribute[0] == 'First_Name') {
                array_push($colNames, $attribute[0]);
            }
        }
        $res = mysqli_query($conn, "select Last_Name,First_Name from customers;");
        $rows = mysqli_num_rows($res);
        for ($i = 0; $i < $rows; $i++) {
            $tuple = mysqli_fetch_array($res);
            if ($tuple[$colNames[0]] == $last_name && $tuple[$colNames[1]] == $first_name) {
                $flag = 1;
            }
        }

        if ($flag == 1) {
            echo '<h1 style="margin-top: 100px;text-align:center">Customer Cost</h1>';
            //显示表头
            $colNames1 = array();
            $res = mysqli_query($conn, "show columns from customers");
            $colNum1 = mysqli_num_rows($res);
            echo "<tr>";
            for ($i = 0; $i < $colNum1; $i++) {
                $attribute = mysqli_fetch_array($res);
                if ($attribute[0] == 'Last_Name' || $attribute[0] == 'First_Name') {
                    echo "<th>" . $attribute[0] . "</th>";
                    array_push($colNames1, $attribute[0]);
                }
            }
            $colNames2 = array();
            $res = mysqli_query($conn, "show columns from bags");
            $colNum2 = mysqli_num_rows($res);
            for ($i = 0; $i < $colNum2; $i++) {
                $attribute = mysqli_fetch_array($res);
                if ($attribute[0] == 'Manufacturer' || $attribute[0] == 'Name') {
                    echo "<th>" . $attribute[0] . "</th>";
                    array_push($colNames2, $attribute[0]);
                }
            }
            array_push($colNames2, 'Cost');
            echo "<th>Cost</th>";
            echo "</tr>";

            //显示数据
            $res = $res = mysqli_query($conn, "select Customer_ID from customers where Last_Name='$last_name' and First_Name='$first_name'");
            $tuple = mysqli_fetch_array($res);
            $cusID = $tuple['Customer_ID'];

            $sum = 0;
            $res = mysqli_query($conn, "call rentalCost('$cusID');");
            $rows = mysqli_num_rows($res);
            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";
                $tuple = mysqli_fetch_array($res);
                for ($j = 0; $j < count($colNames1); $j++) {
                    echo "<td>" . $tuple[$colNames1[$j]] . "</td>";
                }
                for ($j = 0; $j < count($colNames2); $j++) {
                    if ($colNames2[$j] == 'Cost') {
                        $sum += $tuple[$colNames2[$j]];
                        echo "<td>$" . $tuple[$colNames2[$j]] . "</td>";
                    } else
                        echo "<td>" . $tuple[$colNames2[$j]] . "</td>";
                }
                echo '</tr>';
            }
            echo '<tr><td></td><td></td><td></td><td></td><td>$' . sprintf("%.2f", $sum) . '</td>';
        } else if ($flag == 0) {
            echo '<script>alert("no such customer");window.back();</script>';
        }

        ?>
</body>

</html>