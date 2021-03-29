<?php
require_once 'connectdb.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = "";
    if (isset($_GET["id"]) && $_GET["id"] != '') {
        $id = $_GET["id"];
        $strSQL = "DELETE FROM users WHERE id=".$id;
        $result = $myConn->query($strSQL);
        if ($result) {
            echo "ลบข้อมูลสำเร็จ";
        } else {
            echo "ไม่สามารถลบข้อมูลได้";
        }
    } else {
        echo "id is null";
    }



    // ?id=4
    // $frmPassword = $_POST["password"];
    // if ($frmUsername && $frmPassword) {
    //     $strSQL = "INSERT INTO users(username,password_hash,status) ";
    //     $strSQL .= "VALUES ('" . $frmUsername . "','" . $frmPassword . "',0)";
    //     $result = $myConn->query($strSQL);
    //     if ($result) {
    //         echo "เพิ่มข้อมูลสำเร็จ";
    //     } else {
    //         echo "ไม่สามารถเพิ่มข้อมูลได้";
    //     }
    // }
}
