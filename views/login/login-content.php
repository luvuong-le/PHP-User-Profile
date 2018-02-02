<!-- Login Page -->
<header class="header">
    <h1 class="header__title">Welcome!</h1>
</header>


<main>
    <div class="form-container">
        <h3 class="form-container__title">User Login</h3>
        <span class="flash flash-red"><?php 
            displayErrorMessage($_SESSION["message"]);
        ?></span>
        <form action="login.php" method="POST" class="form-container__form">
            <input type="email" name="email" placeholder="Email" class="form-container__input" required>
            <input type="password" name="password" placeholder="Password" class="form-container__input" required>
            <input type="submit" class="form-container__btn form-container__btn--submit" name="login" value="Login">
        </form>
    </div>
</main>