<html>

<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
    <h1 style="margin-top: 100px;text-align:center">Add Rental</h1>
    <table align="center" rules="all" cellpadding="10px">
        <?php
        include("conn.php");

        $cusid = $_GET["Customer_ID"];
        $bagid = $_GET["Bag_ID"];
        $returndate = $_GET["Date_Returned"];
        $opi = $_GET["Optional_Insurance"];

        $insert_sql = "call add_rentals('" . $cusid . "','" . $bagid . "','" . $returndate . "','" . $opi . "')";
        mysqli_query($conn, $insert_sql);
        //mysqli_query($conn,"insert into rent_current values('".$cusid."','".$bagid."',CURRENT_DATE,'".$returndate."','".$opi."',CURRENT_DATE)");

        //显示表头
        $colNames = array();
        $res = mysqli_query($conn, "show columns from rent");
        $colNum = mysqli_num_rows($res);
        echo "<tr>";
        for ($i = 0; $i < $colNum; $i++) {
            $attribute = mysqli_fetch_array($res);
            echo "<th>" . $attribute[0] . "</th>";
            array_push($colNames, $attribute[0]);
        }
        echo "</tr>";

        //显示数据
        $res = mysqli_query($conn, "select * from rent");
        $rows = mysqli_num_rows($res);
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            $tuple = mysqli_fetch_array($res);
            for ($j = 0; $j < count($colNames); $j++) {
                if ($tuple[$colNames[0]] == $cusid && $tuple[$colNames[1]] == $bagid && $tuple[$colNames[3]] == $returndate)
                    echo '<td style="background:gold">' . $tuple[$colNames[$j]] . "</td>";
                else
                    echo '<td>' . $tuple[$colNames[$j]] . "</td>";
            }
            echo '</tr>';
        }

        ?>
</body>

</html>