<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($_GET['register']) && $_GET['register'] == 'success'): ?>
        <p style="color:green;">Registration successful. Please login.</p>
    <?php endif; ?>

    <form action="auth/handle_login.php" method="POST">
        <label>Username or Email:</label><br />
        <input type="text" name="username_or_email" required /><br />

        <label>Password:</label><br />
        <input type="password" name="password" required /><br /><br />

        <button type="submit">Login</button>
    </form>
</body>
</html>
