<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "articles";

$connect = mysqli_connect($host, $user, $pass, $db);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}