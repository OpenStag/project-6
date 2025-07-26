<!-- register.php -->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Kicks Corner Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<script src="assets/js/navbar.js"></script>

<body>
    <div class="container">
        <?php include 'components/navbar.php'; ?>
        <main>
            <h1>Create an Account</h1>
            <form action="auth/handle_register.php" method="POST">
                <div>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required />
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required />
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required />
                </div>
                <button type="submit" class="login-btn">Register</button>
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
            <a class="signup-link" href="login.php">Already have an account? Sign in</a>
        </main>
    </div>
</body>

</html>
