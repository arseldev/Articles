<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/AuthController.php";

if ($_SESSION['login'] != true) {
    header("Location: ../");
    exit();
}