<div class="user">
    <div class="user__image">
        <!-- Default image this example application has no uploading images -->
        <svg class="user__image-icon">
            <use xlink:href="icons/sprites.svg#icon-user-tie"></use>
        </svg>
        <a href="#" class="user__details-cta">Change Password</a>
    </div>
    <div class="user__details">
        <h2 class="margin-bottom-md">Personal Information</h2>
        <div class="user__details-col margin-bottom-md">
            <h4>Username </h4><br>
            <div class="user__details-col-field">
                <?= $_SESSION["name"] ?>
            </div>
        </div>

        <div class="user__details-col margin-bottom-md">
            <h4>Email </h4><br>
            <div class="user__details-col-field">
                <?= $_SESSION["email"] ?>
            </div>
        </div>
</div>