<?php
// auth/handle_login.php
require_once '../config/db.php';
session_start();

$usernameOrEmail = trim($_POST['username_or_email'] ?? '');
$password = $_POST['password'] ?? '';

if (!$usernameOrEmail || !$password) {
    $_SESSION['error'] = "Please fill all fields.";
    header("Location: ../login.php");
    exit;
}

// Fetch user by username or email
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
$stmt->execute([$usernameOrEmail, $usernameOrEmail]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    $_SESSION['error'] = "Invalid username or email.";
    header("Location: ../login.php");
    exit;
}

if (!password_verify($password, $user['password'])) {
    $_SESSION['error'] = "Invalid password.";
    header("Location: ../login.php");
    exit;
}

// Set session
$_SESSION['user_id'] = $user['id'];
$_SESSION['username'] = $user['username'];

// Redirect to home
header("Location: ../home.php");
exit;
