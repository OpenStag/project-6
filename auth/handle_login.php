<?php
// auth/handle_login.php
require_once '../config/db.php';
session_start();

$usernameOrEmail = trim($_POST['username_or_email'] ?? '');
$password = $_POST['password'] ?? '';

if (!$usernameOrEmail || !$password) {
    die("Please fill all fields.");
}

// Fetch user by username or email
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
$stmt->execute([$usernameOrEmail, $usernameOrEmail]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    die("Invalid Username or Email");
}

// password
if (!password_verify($password, $user['password'])) {
    die("Invalid password.");
}

// Set Session
$_SESSION['user_id'] = $user['id'];
$_SESSION['username'] = $user['username'];

// Redirect to the home
header("Location: ../home.php");
exit;
