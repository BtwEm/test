<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="../Styles/logInStyles.css">
</head>
<body>


    <div class="mainContainer">
        <div class="title">
            <h1>Log In Here!</h1>
        </div>
        <div class="formContainer">
            <h3> Sign in </h3>
            <form action="">
                <label for="">Email</label>
                <input type="text">
                <div class="password-labels">
                    <label for="">Password</label>
                    <a href="">Forgot your Password?</a>
                </div>
                <input type="password">
                <div class="checkbox-section">
                    <input type="checkbox">
                    <label for="">Stay signed in?</label>
                </div>
                <input type="submit" value="Continue">
            </form>
        </div>
        <div class="signUp">
            <p>Dont have an account?</p>
            <a href="">Sign up! It's free!</a>
        </div>
        <div class="contact">
            <p></p>
            <p>Contact</p>
            <p>Privacy & terms</p>
        </div>
            </form>
        </div>
    </div>
          
    <?php
      require_once("footer.php")
    ?>
</body>
<script src="../Scripts/script.js"></script>
</html>