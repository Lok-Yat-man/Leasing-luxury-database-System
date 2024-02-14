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
    </style>
</head>

<body>
    <h1 style="margin-top: 100px;text-align:center">Add Rental</h1>
    <form action="houtai\add_rentals.php" method="get">
        <table align="center" rules="all" cellpadding="10px">
            <?php
            include("conn.php");

            $colNames = array();
            $res = mysqli_query($conn, "show columns from rent");
            $colNum = mysqli_num_rows($res);
            echo "<tr>";
            for ($i = 0; $i < $colNum; $i++) {
                $attribute = mysqli_fetch_array($res);
                if ($attribute[0] != 'Date_Rented') {
                    echo "<th>" . $attribute[0] . "</th>";
                    array_push($colNames, $attribute[0]);
                }
            }
            echo "<th>Operation</th>";
            echo "</tr>";


            echo "<tr>";
            for ($i = 0; $i < count($colNames); $i++) {
                if ($colNames[$i] != 'Date_Rented')
                    echo '<td><input type="text" name="' . $colNames[$i] . '" style="height:30px;"></input></td>';
            }
            echo "<td><input type ='submit' style='height:50px;' value='Submit'></td>";
            echo '</tr>';

            ?>
        </table>
    </form>
</body>

</html>