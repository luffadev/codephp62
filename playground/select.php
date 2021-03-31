<?php
include 'template/header.html';
require_once 'connectdb.php';

$statement = "SELECT * FROM users";
$mysqli_statement = $myConn->query($statement);
?>

<body>
    <table style="width: 100%;" border="1">
        <tr>
            <td>รหัส</td>
            <td>ชื้อผู้ใช้</td>
            <td>สถานะ</td>
            <td>แก้ไข</td>
            <td>ลบ</td>
        </tr>
        <?php
        while ($row = $mysqli_statement->fetch_array()) {
        ?>
        <tr>
            <td><?php echo $row["id"]?></td>
            <td><?php echo $row["username"]?></td>
            <td><?php echo $row["status"]?></td>
            <td><a href="update.php?id=<?= $row["id"]?>&username=<?= $row["username"]?>&status=<?= $row["status"]?>"><i class="far fa-edit"></i></a></td>
            <td><a href="delete.php?id=<?= $row["id"]?>"><i class="far fa-trash-alt"></i></a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>