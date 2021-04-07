<?php
include 'template/header.html';
require_once 'connectdb.php';

$statement = "SELECT * FROM users";
$mysqli_statement = $myConn->query($statement);
?>
<body>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>รหัส</th>
                <th>ชื้อผู้ใช้</th>
                <th>สถานะ</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $mysqli_statement->fetch_array()) {
            ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["username"] ?></td>
                    <td><?php echo $row["status"] ?></td>
                    <td><a href="update.php?id=<?= $row["id"] ?>&username=<?= $row["username"] ?>&status=<?= $row["status"] ?>"><i class="far fa-edit"></i></a></td>
                    <td><a href="delete.php?id=<?= $row["id"] ?>"><i class="far fa-trash-alt"></i></a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <a href="insert.php">เพิ่มผู้ใช้</a>


    <?php
    include 'template/footer.html';
    ?>
</body>

</html>