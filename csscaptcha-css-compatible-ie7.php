<?php
session_start();
header('Cache-Control: no-cache, must-revalidate');
header('Content-Type: text/css');

echo isset($_SESSION['css_compatible_ie7']) ? $_SESSION['css_compatible_ie7'] : '';
?>