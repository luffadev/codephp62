<?php
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
            echo "เพิ่มข้อมูลสำเร็จ";
        } else {
            echo "ไม่สามารถเพิ่มข้อมูลได้";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="post">
        <table border="1">
            <tr>
                <td>username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="save"></td>
            </tr>
        </table>
    </form>
</body>

</html>