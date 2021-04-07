<?php
include 'template/header.html';
require_once 'connectdb.php';

$id = "";
$username = "";
$status = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = "";
    if (isset($_GET["id"]) && $_GET["id"] != '') {
        $id = $_GET["id"];
        $username = $_GET["username"];
        $status = $_GET["status"];
    } else {
        echo "id is n+
        ull";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $status = "";
    $id = $_GET["id"];
    $username = $_POST["username"];
    $status = $_POST["status"];
    // echo $username . " -- " .$status;
    $strSQL = "UPDATE users SET username='" . $username . "',status=" . $status . " WHERE id=" . $id;
    if (($username == "") && ($status == "")) {
        echo "ไม่สามารถเพิ่มข้อมูลได้";
    } else {
        $result = $myConn->query($strSQL);
        if ($result) {
?>
            <a href="select.php">กลับหน้ารายชื่อ</a>
<?php
        } else {
            echo "ไม่สามารถเพิ่มข้อมูลได้";
        }
    }
}

?>



<body>
    <form action="update.php?id=<?=$id?>" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" value="<?= $username ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Status</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="status" value="<?= $status ?>">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <?php
    include 'template/footer.html';
    ?>
</body>

</html>