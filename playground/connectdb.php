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