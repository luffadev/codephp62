<?php
require_once 'connectdb.php';

$statement = "SELECT * FROM users";
$mysqli_statement = $myConn->query($statement);
// while ($row = $mysqli_statement->fetch_array()) {
//     echo $row["id"] . ' ' . $row["username"] . ' ' . $row["status"] . '<br>';
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table style="width: 100%;" border="1">
        <tr>
            <td>รหัส</td>
            <td>ชื้อผู้ใช้</td>
            <td>สถานะ</td>
        </tr>
        <?php
        while ($row = $mysqli_statement->fetch_array()) {
        ?>
        <tr>
            <td><?php echo $row["id"]?></td>
            <td><?php echo $row["username"]?></td>
            <td><?php echo $row["status"]?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>