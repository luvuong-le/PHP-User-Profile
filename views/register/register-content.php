<!-- Register Page -->
<header class="header">
    <h1 class="header__title">Welcome!</h1>
</header>


<main>
    <div class="form-container">
        <h3 class="form-container__title">User Registration</h3>
        <form action="login.php" method="POST" class="form-container__form">
            <input type="text" name="email" placeholder="Email" class="form-container__input" required>
            <input type="text" name="username" placeholder="Username" class="form-container__input" required>
            <input type="text" name="password" placeholder="Password" class="form-container__input" required>
            <input type="submit" class="form-container__btn form-container__btn--submit" name="register" value="Login">
        </form>
    </div>
</main>