<?php
// config/auth.php

session_start();

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function requireLogin() {
    if (!isLoggedIn()) {
        header("Location: /login.php");
        exit;
    }
}

function currentUserId() {
    return $_SESSION['user_id'] ?? null;
}
