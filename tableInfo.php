<!DOCTYPE html>
<html>

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
    </style>
</head>

<body>
    <form action="" method="get">
        <table align="center" rules="all" cellpadding="10px">
            <?php
            ini_set('date.timezone', 'Asia/Shanghai');
            include("conn.php");
            $tableName = $_GET["tableName"];

            echo '<h1 align="center">'. $tableName .'</h1>';
            //显示表头
            $colNames = array();
            $res = mysqli_query($conn, "show columns from $tableName");
            $colNum = mysqli_num_rows($res);
            echo "<tr>";
            for ($i = 0; $i < $colNum; $i++) {
                $attribute = mysqli_fetch_array($res);
                echo "<th>" . $attribute[0] . "</th>";
                array_push($colNames, $attribute[0]);
            }
            echo "</tr>";

            //显示数据
            $res = mysqli_query($conn, "select * from $tableName");
            $rows = mysqli_num_rows($res);
            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";
                $tuple = mysqli_fetch_array($res);
                for ($j = 0; $j < count($colNames); $j++) {
                    if($colNames[$j]=='Price_Per_Day')
                        echo "<td>$" . sprintf("%.2f",$tuple[$colNames[$j]]) . "</td>";
                    else
                        echo "<td>" . $tuple[$colNames[$j]] . "</td>";
                }
                echo '</tr>';
            }
            ?>
        </table>
    </form>
</body>

</html>