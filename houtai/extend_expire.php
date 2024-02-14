<html>

<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
    <h1 style="margin-top: 100px;text-align:center">Due Today</h1>
    <table align="center" rules="all" cellpadding="10px">
        <?php
        include("conn.php");

        //显示数据
        $res = mysqli_query($conn, "select * from rent where Date_Returned=curdate()");
        $rows = mysqli_num_rows($res);
        if ($rows > 0) {
            echo '<table align="center" rules="all" cellpadding="10px">';
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

            $res = mysqli_query($conn, "select * from rent where Date_Returned=curdate()");
            $rows = mysqli_num_rows($res);
            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";
                $tuple = mysqli_fetch_array($res);
                for ($j = 0; $j < count($colNames); $j++) {
                    echo "<td>" . $tuple[$colNames[$j]] . "</td>";
                }
                echo '</tr>';
            }
            echo '<script>
                    alert("you rent expired,it has been already extended for 7 days!")
                  </script>';
            mysqli_query($conn, "delete from rent_current where Date_Returned=curdate()");
        } else {
            echo "<h3 style='text-align:center'>NONE</h1>";
            $colNames = array();
            $res = mysqli_query($conn, "show columns from rent_current");
            $colNum = mysqli_num_rows($res);
            echo "<tr>";
            for ($i = 0; $i < $colNum; $i++) {
                $attribute = mysqli_fetch_array($res);
                echo "<th>" . $attribute[0] . "</th>";
                array_push($colNames, $attribute[0]);
            }
            echo "</tr>";

            //显示数据
            $res = mysqli_query($conn, "select * from rent_current");
            $rows = mysqli_num_rows($res);
            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";
                $tuple = mysqli_fetch_array($res);
                for ($j = 0; $j < count($colNames); $j++) {
                    if ($colNames[$j] == 'CurrentD')
                        echo "<td>" . $tuple[$colNames[$j]] . "</td>";
                    else
                        echo "<td>" . $tuple[$colNames[$j]] . "</td>";
                }
                echo '</tr>';
            }
        }

        ?>
</body>

</html>