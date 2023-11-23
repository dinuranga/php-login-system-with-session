<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>window.location.href= 'index.php';</script>";
    exit();
} else {
    session_destroy();
    echo "<script>window.location.href= 'index.php';</script>";
}
