<?php
ob_start(); // Start output buffering
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../../admin/include/connection.php';
?>
