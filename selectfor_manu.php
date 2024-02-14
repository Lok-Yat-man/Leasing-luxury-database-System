<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
    
        h2{
            margin-top: 100px;
            text-align: center;
        }

        a{
            text-decoration: none;
            border-radius: 5px;
        }
        
        a:hover{
            background-color: gold;
        }
    </style>
</head>

<body>
    <?php
    ini_set('date.timezone', 'Asia/Shanghai');
    include("conn.php");

    echo '<h2>List of Manufacturers</h2>';

    //显示表头
    echo '<table align="center" frame="border" rules="all" cellpadding="10px">';
    $colNames = array();
    $res = mysqli_query($conn, "show columns from bags");
    $colNum = mysqli_num_rows($res);
    echo "<tr>";
    for ($i = 0; $i < $colNum; $i++) {
        $attribute = mysqli_fetch_array($res);
        if ($attribute[0] == 'Manufacturer') {
            echo "<th colspan='8'>" . $attribute[0] . "</th>";
            array_push($colNames, $attribute[0]);
        }
    }
    echo "</tr>";

    //显示数据
    $res = mysqli_query($conn, "select Manufacturer from bags group by Manufacturer");
    $rows = mysqli_num_rows($res);
    for ($i = 0; $i < $rows; $i++) {
        $tuple = mysqli_fetch_array($res);
        for ($j = 0; $j < count($colNames); $j++) {
            echo '<td><a href="houtai/Manufacturer`s bag.php?manu_name=' . $tuple[$colNames[$j]] . '">' . $tuple[$colNames[$j]] . '</a></td>';
        }
    }

    ?>
    <style>
        td {
            text-align: center;
        }
    </style>
</body>

</html>