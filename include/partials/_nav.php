<nav class="nav">
    <a href="index.php" class="nav__logo">Home</a>
    <ul class="nav__list">
        <?php if (!isset($_SESSION["loggedIn"])): ?>
            <li><a href="profile.php" class="nav__item">View Profile</a></li>
            <li><a href="login.php" class="nav__item">Login</a></li>
            <li><a href="register.php" class="nav__item">Register</a></li>
        <?php endif ?>

        <?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true): ?>
            <li><a href="profile.php" class="nav__item"><?= $_SESSION["name"]?></a></li>
            <li><a href="profile.php" class="nav__item">Logout</a></li>
        <?php endif ?>
    </ul>
</nav>