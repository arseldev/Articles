<?php
include_once "connect.php";
$query = "SELECT * FROM articles";
$result = mysqli_query($connect, $query);

$articles = [];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $articles[] = $row;
    }
}