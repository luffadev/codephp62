<?php
$host = "localhost";
$username = "root";
$password = "";

$database = 'codephp62';

$myConn = new mysqli($host, $username, $password, $database);
if ($myConn->connect_errno) {
    printf("Connect failed: %s\n", $myConn->connect_error);
    exit();
}

// $strSQL = "INSERT INTO `users`(`username`, `password_hash`) ";
// $strSQL .= "VALUES ('user03','password for user 03')";

// $result = $myConn->query($strSQL);
// if($result){
//    echo "1";
// }else{
//     echo "2" . $result;
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
    <table border="1">
        <tr>
            <td>username</td>
            <td><input type="text" name="username" id="username"></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="password" name="pasword" id="password"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="button" value="save"></td>
        </tr>
    </table>
</body>

</html>