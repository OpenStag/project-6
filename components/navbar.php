<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
$username = $isLoggedIn ? $_SESSION['username'] : null;
?>

<header>
    <div class="logo-font logo">Kicks Corner</div>
    <nav>
        <a href="">New Arrivals</a>
        <a href="./MenShoes/Men.html">Men</a>
        <a href="./WomenShoes/Women.html">Women</a>
        <a href="./SportsShoes/Sports.html">Sports</a>
        <a href="#">About Us</a>
    </nav>

    <?php if ($isLoggedIn): ?>
        <div class="profile-container" onclick="toggleDropdown()">
            <img src="https://img.icons8.com/?size=64&id=85080&format=png&color=000000" alt="Icon 1" class="icon-img" />
            <img src="https://img.icons8.com/?size=64&id=87&format=png&color=000000" alt="Icon 2" class="icon-img" />
            <img
                src="https://ui-avatars.com/api/?name=<?php echo urlencode($username); ?>&background=random&color=fff&size=64&rounded=true"
                alt="Profile"
                class="profile-icon" />
            <div class="profile-dropdown" id="profileDropdown">
                <p>Hello, <?php echo htmlspecialchars($username); ?> 👋</p>
                <form action="logout.php" method="POST">
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </div>
        </div>
    <?php else: ?>
        <button class="signup-btn">Sign Up</button>
    <?php endif; ?>

</header>