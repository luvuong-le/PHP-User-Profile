----------- Pure PHP User Login System ----------------

Just a small project for myself to relearn the PHP Basics.

Home Page: Comparison Slider Effect.

Login Page: Logs the user in and redirects to the user profile page.

Register Page: Registers the user with an email, hashed password and username.

Profile Page: Displays User Details from Session Variables. (Only displays username and email). Ideal would be to query from database for more complicated user database schemas.

------------------- Database Schema Set Up ---------------------------------

Database: YOUR_OWN_CHOICE

Table: users

Fields / Columns 
id: int(11) not nullable auto increment
name: varchar(45) not nullable
email: varchar(45) not nullable
password: varchar(255) not nullable

--------------------------------- Feature ideas to add ---------------------------------

 Image uploading after registering with an user icon. Upload the image path to database and retrieve from image folder.


 ------------------------------ Important Notes -------------------------------------
 - Set up DB Configuration details in the config.php file in the folder "db" before using.
  
 - The database column names here are used in the php files, if your schema is different (different column names) you must update those
 in the php files.

 - This was a quick project so it is not perfect