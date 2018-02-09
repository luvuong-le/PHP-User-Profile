<!-- Register Page -->
<header class="header">
    <h1 class="header__title">Welcome!</h1>
</header>


<main>
    <div class="form-container">
        <h3 class="form-container__title">User Registration</h3>
        <?php if (isset($_SESSION["message"])): ?>
            <div id="form-container__error" class="flash flash--red">
            <?php
                echo $_SESSION["message"];
                unset($_SESSION["message"]);
            ?>
        </div>
        <?php endif ?>
        <form action="register.php" method="POST" class="form-container__form">
            <input type="text" name="name" placeholder="Name" class="form-container__input" required>
            <input type="text" name="email" placeholder="Email" class="form-container__input" required>
            <input type="password" name="password" placeholder="Password" class="form-container__input" required>
            <input type="submit" class="form-container__btn form-container__btn--submit" name="register" value="Register">
        </form>
    </div>
</main>