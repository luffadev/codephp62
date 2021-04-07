<?php
include 'template/header.html';
require_once 'connectdb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $frmUsername = $frmPassword = "";
    $frmUsername = $_POST["username"];
    $frmPassword = $_POST["password"];
    if ($frmUsername && $frmPassword) {
        $strSQL = "INSERT INTO users(username,password_hash,status) ";
        $strSQL .= "VALUES ('" . $frmUsername . "','" . $frmPassword . "',0)";
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
    <form action="insert.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <?php
    include 'template/footer.html';
    ?>
</body>

</html>