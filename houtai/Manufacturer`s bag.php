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
    <h1 style="margin-top: 100px;text-align:center">Show Manufacturer</h1>
    <table align="center" rules="all" cellpadding="10px">
        <?php
        include("conn.php");

        $manu_name = $_GET["manu_name"];
        //显示表头
        $colNames = array();
        $res = mysqli_query($conn, "show columns from bags");
        $colNum = mysqli_num_rows($res);
        echo "<tr>";
        for ($i = 0; $i < $colNum; $i++) {
            $attribute = mysqli_fetch_array($res);
            if ($attribute[0] == 'Name' || $attribute[0] == 'Color' || $attribute[0] == 'Manufacturer') {
                echo "<th>" . $attribute[0] . "</th>";
                array_push($colNames, $attribute[0]);
            }
        }
        echo "</tr>";

        //显示数据
        $res = mysqli_query($conn, "call selectManu('$manu_name');");
        $rows = mysqli_num_rows($res);
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            $tuple = mysqli_fetch_array($res);
            for ($j = 0; $j < count($colNames); $j++) {
                echo "<td>" . $tuple[$colNames[$j]] . "</td>";
            }
            echo '</tr>';
        }

        ?>
</body>

</html>