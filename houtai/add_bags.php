<html>

<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
    <h1 style="margin-top: 100px;text-align:center">Add Bag</h1>
    <table align="center" rules="all" cellpadding="10px">
        <?php
        include("conn.php");


        $bagsid = $_GET["Bag_ID"];
        $bagsname = $_GET["Name"];
        $bagscolor = $_GET["Color"];
        $bagsmanu = $_GET["Manufacturer"];
        $bagsppd = $_GET["Price_Per_Day"];
        $insert_sql = "call add_bags('" . $bagsid . "','" . $bagsname . "','" . $bagscolor . "','" . $bagsmanu . "','" . $bagsppd . "')";
        mysqli_query($conn, $insert_sql);

        //显示表头
        $colNames = array();
        $res = mysqli_query($conn, "show columns from bags");
        $colNum = mysqli_num_rows($res);
        echo "<tr>";
        for ($i = 0; $i < $colNum; $i++) {
            $attribute = mysqli_fetch_array($res);
            echo "<th>" . $attribute[0] . "</th>";
            array_push($colNames, $attribute[0]);
        }
        echo "</tr>";

        //显示数据
        $res = mysqli_query($conn, "select * from bags");
        $rows = mysqli_num_rows($res);
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            $tuple = mysqli_fetch_array($res);
            for ($j = 0; $j < count($colNames); $j++) {
                if ($tuple[$colNames[0]] == $bagsid)
                    echo '<td style="background:gold">' . $tuple[$colNames[$j]] . "</td>";
                else
                    echo '<td>' . $tuple[$colNames[$j]] . "</td>";
            }
            echo '</tr>';
        }

        ?>
</body>

</html>