<!-- login.php -->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Kicks Corner Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<script src="assets/js/navbar.js"></script>

<body>
    <div class="container">
        <?php include 'components/navbar.php'; ?>
        <main>
            <h1>Welcome Back</h1>

            <?php
            if (isset($_SESSION['error'])) {
                echo "<p style='color: red;'>{$_SESSION['error']}</p>";
                unset($_SESSION['error']);
            }
            ?>

            <?php if (isset($_GET['register']) && $_GET['register'] == 'success'): ?>
                <p class="success-message">Registration successful. Please login.</p>
            <?php endif; ?>


            <form action="auth/handle_login.php" method="POST">
                <div>
                    <label for="username_or_email">Username or Email:</label>
                    <input type="text" id="username_or_email" name="username_or_email" required />
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required />
                    <a href="#forgot_password.php" class="forgot-password">Forgot Password?</a>
                </div>
                <button type="submit" class="login-btn">Login</button>
            </form>

            <div class="divider">Or continue with</div>
            <div class="social-buttons">
                <button class="social-btn">
                    <img alt="Google logo" class="w-4 h-4" height="16" src="https://img.icons8.com/?size=100&id=17949&format=png&color=000000" width="16" />
                    Continue with Google
                </button>
                <button class="social-btn">
                    <img alt="Facebook logo" class="w-4 h-4" height="16" src="https://img.icons8.com/?size=100&id=uLWV5A9vXIPu&format=png&color=000000" width="16" />
                    Continue with Facebook
                </button>
            </div>
            <a class="signup-link" href="register.php">Don't have an account? Sign up</a>
        </main>
    </div>
</body>

</html>