<?php
session_start();
header('Cache-Control: no-cache, must-revalidate');
header('Content-Type: text/css');

echo isset($_SESSION['css']) ? $_SESSION['css'] : '';
?>